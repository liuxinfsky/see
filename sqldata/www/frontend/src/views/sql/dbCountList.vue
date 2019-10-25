<style scoped>
  .time{
    font-size: 14px;
  }
  .content{
    font-weight: bold;
    padding-left: 5px;
  }
</style>

<template>
    <div>
        <div>
          <Card>
            <Row>
            <Col span="6">
                <Cascader :data="targetDbs" trigger="hover" @on-change="handleGetTables" placeholder="选择数据库"></Cascader>                
              </Col>
              <Col span="6">
                <Input icon="search" v-model="getParams.search" placeholder="搜索" @on-click="handleGetTables" @on-enter="handleGetTables" style="width: 200px; float:right"/>
              </Col>
              <Col span="3">
              <p style="float:right;margin-right:-100px">
              <i-button type="info" @click="getLocation" >查看详细的数据库表统计</i-button>
              </p>       
              </Col>
            </Row>  
            </br>
            <Row>
              <Table :columns="columnsSqlList" :data="tableList" size="small" @on-sort-change='changeSort'></Table>
              </br>
              <Page :total=total show-sizer :current=getParams.page @on-change="pageChange" @on-page-size-change="sizeChange"></Page>
            </Row>
          </Card>
          <copyright> </copyright>
        </div>
        <!-- <Spin size="large" fix v-if="spinShow"></Spin> -->
        <Modal
            v-model="sqlContentModal"
            width="650"
            :title="sqlContentTitle"
            @on-cancel="cancel">
            <div>
              <Scroll height=350>
                <div v-for="(item, index) in sqlContent" :value="item.value" :key="index">{{ item.value }} </div>
              </Scroll>
            </div>
        </Modal>  

        <!-- <Modal
            v-model="stepsModal"
            width="400"
            :title="stepsModalTitle"
            @on-cancel="cancel">
            <div>
              <Scroll height=450>
                <Timeline>
                  <TimelineItem v-for="(item, index) in steps" :value="item.value" :key="index" :color="getColor(item.status)">
                    <p class="content">{{ item.username }}  </p>
                    <p class="time">{{ item.updatetime | formatTime }} <Tag :color="stepStatusMap[item.status]['color']" style="margin-left:10px">{{ stepStatusMap[item.status]['desc'] }}</Tag></p>
                  </TimelineItem>
                </Timeline>
              </Scroll>
            </div>
        </Modal>   -->

       <!--  <Modal
            v-model="cronForm.modal"
            width="600"
            :title="cronForm.title"
            @on-ok="handleSetCron"
            @on-cancel="cancel">
            <div>
              <Form ref="cronForm" :model="cronForm" :rules="ruleCronForm" :label-width="100">
                <FormItem label="工单ID:">
                  <div>{{cronForm.id}}</div>
                </FormItem>
                <FormItem label="定时时刻:" prop="time">
                  <DatePicker type="date" placeholder="选择日期" style="width: 200px" v-model="cronForm.date"></DatePicker>
                  <TimePicker format="HH:mm" placeholder="选择时间" style="width: 112px" v-model="cronForm.time"></TimePicker>
                </FormItem>
                <FormItem label="说明:">
                  <div>核准人通过的工单设置定时，到时间将自动执行</div>
                </FormItem>                
              </Form> 
            </div>
        </Modal> -->

     </div>
</template>
<script>
  import {GetDbList} from '@/api/sql/dbs'
  import {CascaderData} from '@/utils/sql/formatData'
  import {GetDbTableCount,GetTableInfo,GetDbAll} from '@/api/sql/sqlquery'
  import {GetPersonalSettings} from '@/api/sql/check'
  import {getSqlContent} from '@/utils/sql/inception'
  import copyright from '../my-components/public/copyright'
  import {Button, Table, Page, Modal, Message, Icon, Tag, DropdownMenu, DropdownItem, Dropdown, Tooltip, Poptip, Badge} from 'iview';

  export default {
    components: {Button, Table, Page, Modal, Message, Icon, Tag, DropdownMenu, DropdownItem, Dropdown, Tooltip, Poptip, Badge, copyright},
    computed:{

    },
    destroyed () {
     
    },
    data () {
      return {
        targetDbs:[],
        env_map: {
          prd:'生产',
          test:'测试',
          '生产':'prd',
          '测试':'test'
        },
        dbList:[],
        tableList:[],
        checkData:{
          sql:'',
          table:''
        },
        total:1,
        getParams:{
          page:1,
          pagesize:10,
          db_name:'',
          search:'',
          sorttype:'asc',
          sortfield:'',
        },
        sqlContentTitle:'',
        sqlContent:[],
        database:'',
        sqlContentModal: false,
        columnsSqlList: [
          {
            title: 'ID',
            sortable: true,
            width: 60,
            key: 'id',
          },
          {
            title: '数据库名',
            key: 'db_name',
            width: 100,
            render: (h, params) => {
              return h('div', [
                h('span', {}, params.row.db_name),
              ])
            }
          },
          {
            title: '表名',
            key: 'table_name',
            width: 200,
            render: (h, params) => {
              return h('div', [
                h('span', {}, params.row.table_name),
              ])
            }
          },

          {
            title: '表描述',
            key: 'table_comment',
            width: 200,
            render: (h, params) => {
              return h('div', [
                h('span', {}, params.row.table_comment),
              ])
            }
          },

          {
            title: '表总数据量',
            width: 150,
            sortable: true,
            key:'counter',
            render: (h, params) => {
              return h('div', [
                h('span', {}, this.tranNumber(params.row.counter,3)),
              ])
            }
          },

          {
            title: '今天的数据增量',
            width: 100,
            sortable: true,
            key:'incrementer',
            render: (h, params) => {
              return h('div', [
                h('span', {}, this.tranNumber(params.row.incrementer,3)),
              ])
            }
          },

          {
            title: '昨天的数据增量',
            width: 100,
            sortable: true,
            key:'yesincrementer',
            render: (h, params) => {
              return h('div', [
                h('span', {}, this.tranNumber(params.row.yesincrementer,3)),
              ])
            }
          },

          {
            title: '表结构',
            width: 150,
            render: (h, params) => {
              return h('div', [
                h('span', {}, params.row.table_info),
                h('Button', {
                  props: {
                    size: 'small',
                  },
                  style: {float:'center'},
                  on: {
                    click: () => {
                      this.handleGetTableInfo(params.row.table_name,params.row.db_name)
                    }
                  }
                }, '查看表结构')
              ])
            }
          }         
        ],
      }
    },

    created () {
      this.handleSelect()
      this.handleGetTables()
    },

    methods: {
      getColor(status){
        return this.stepStatusMap[status]['color']
      },
      handleSelect () {
        GetPersonalSettings()
        .then(response => {
          const data = response.data.results[0]
          const dbs = data.all_db_list
          this.dbList = dbs
          dbs.map( (item) => {
            item.env = this.env_map[item.env]
          })
          this.targetDbs = CascaderData(dbs)          
        })
      },

      handleGetTables (e) {
        if (e != undefined && e[2] != undefined) {
          this.database = e[2]
        }
        this.getParams.db_name = this.getDbName(this.database)
        GetDbTableCount(this.getParams,this.db_name)
        .then(
          response => {
            this.tableList = response.data.data
            this.total = response.data.counts
          }
        )
      },
      getDbName(id){
        for (let item of this.dbList){
            if(item.id == id) {
              return item.name
            }
        }
      },
      getLocation(){
        window.location="http://kibana.julive.com/"
      },
      changeSort(obj){
        this.getParams.sorttype=obj.order
        this.getParams.sortfield=obj.key
        this.handleGetTables()
      },
      getDbId(db_name){
        for (let item of this.dbList){
            if(item.name == db_name) {
              return item.id
            }
        }
      },
      tranNumber(num, point) {
            let numStr = num.toString()
            // 十万以内直接返回 
            if (numStr.length <5) {
                return numStr;
            }
            //大于8位数是亿
            else if (numStr.length > 8) {
                let decimal = numStr.substring(numStr.length - 8, numStr.length - 8 + point);
                return parseFloat(parseInt(num / 100000000) + '.' + decimal) + '亿';
            }
            //大于6位数是十万 (以10W分割 10W以下全部显示)
            else if (numStr.length >= 5) {
                let decimal = numStr.substring(numStr.length - 4, numStr.length - 4 + point)
                return parseFloat(parseInt(num / 10000) + '.' + decimal) + '万';
            }
        },
      handleGetTableInfo (e,db_name) {
        if (e.length != 0){
          this.query_type = e + ' / 表结构'
          GetTableInfo(this.getDbId(db_name), e)
          .then(
          response => {
            this.query_result = response.data.results
            this.sqlContent = getSqlContent(response.data.results)
            this.sqlContentModal = true
            this.sqlContentTitle = '查看 '+this.query_type
          }
          )
        }
      },

      alertSuccess (title, paramId, execute_time, affected_rows) {
        this.$Notice.success({
          title: title,
          duration: 8,
          render: h => {
            let id = h('p', {}, 'ID：' + paramId) 
            let time = execute_time ? h('p', {}, '耗时（秒）：' + execute_time) : ''
            let rows = affected_rows ? h('p', {}, '影响的行数：' + affected_rows) : ''
            let subtags = [id, time, rows]
            return h('div', subtags)
          }
        });
      },

      alertCronSet (paramId, cron_time) {
        this.$Notice.success({
          title: '设置成功',
          render: h => {
            let id = h('div', {}, 'ID：' + paramId) 
            let time = cron_time ? h('div', {}, '定时执行时间：' + cron_time) : ''
            let subtags = [id, time]
            return h('div', subtags)
          }
        });
      },

      alertWarning (title, paramId) {
        this.$Notice.warning({
          title: title,
          duration: 0,
          render: h => {
            let id = h('p', {}, 'ID：' + paramId) 
            let desc = h('p', {}, '具体查看工单详情[inception结果]') 
            let subTags = [id, desc]
            return h('div', subTags)
          }
        });
      },

      initCron (rows) {
        this.cronForm.modal = true
        this.cronForm.id = rows.id
        let cron_time = rows.cron_time
        let date = ''
        let time = ''
        if (cron_time) {
          let date_time = cron_time.split(' ')
          date = date_time[0]
          time = date_time[1]
        }
        this.cronForm.date = date
        this.cronForm.time = time
      },
      handleSetCron () {
        let cron_time = formatDate(this.cronForm.date) + ' ' + this.cronForm.time
        let data = {cron_time:cron_time}
        let id = this.cronForm.id
        let action = 'cron'
        SetCron(id, action, data)
        .then(response => {
          const status = response.data.status
          if (status == 5) {
            this.alertCronSet(id, data.cron_time)
          }
          this.handleGetSqlList()
        })
      },

      getDatetime () {
        let date = this.userInfo.date_joined || ''
        return date.slice(0,19).replace('T',' ')
      },

      handleGetSqlList () {
        this.spinShow = true
        GetSqlList(this.getParams)
        .then(response => {
          this.spinShow = false
          this.sqlList = response.data.results
          this.total = response.data.count
        })
      },

      handleAction (action, params) {
        let id = params.row.id
        SqlAction(id, action)
        .then(response => {
          const status = response.data.status
          const data = response.data.data
          this.qy(response.data.id, action)
          //this.handleGetSqlList()
        })
      },

      cancel () {
        Message.info('Clicked cancel');
      },

      pageChange (page) {
        this.getParams.page = page
        this.handleGetTables()
      },

      sizeChange(size){
        this.getParams.pagesize = size
        this.handleGetTables()
      },

      dateChange (data) {
        console.log(data)
        if (data[0]) {
          this.getParams.daterange = data[0] + ',' + addDate(data[1], 1)
          this.handleGetTables()
        }
      },

      dateClear (data) {
        console.log(data)
      }

    },
  }
</script>
