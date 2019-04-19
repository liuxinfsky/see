<style scoped>
</style>

<template>
    <div>
      <div style="margin-top:10px;margin-bottom:10px">
        <Row style="line-height:30px;">
          <Col span="2">
            <p> <b>ID：</b> </p>
          </Col>
          <Col span="10">
            <p> {{row.id ? row.id : '&nbsp;'}} </p>
          </Col>
          <Col span="2">
            <p> <b>目标库：</b>  </p>
          </Col>
          <Col span="10">
            <p> {{row.db_name ? row.db_name : '&nbsp;'}} </p>
          </Col>
        </Row>

        <Row style="line-height:30px;">
          <Col span="2">
            <p> <b>提交时间：</b> </p>
          </Col>
          <Col span="10">
            <p> {{getTime}} </p>
          </Col>
          <Col span="2">
            <p> <b>影响的行数：</b>  </p>
          </Col>
          <Col span="10">
            <p> {{row.exe_affected_rows ? row.exe_affected_rows : '&nbsp;' }} </p>
          </Col>
        </Row>

        <Row style="line-height:30px;">
          <Col span="2">
            <p> <b>发起人：</b> </p>
          </Col>
          <Col span="10">
            <p> {{row.cemail ? row.cemail : '&nbsp;' }} </p>
          </Col>
          <Col span="2">
            <p> <b>核准人：</b>  </p>
          </Col>
          <Col span="10">
            <p> {{row.email ? row.email : '&nbsp;'}} </p>
          </Col>
        </Row>

        <Row style="line-height:30px;">
          <Col span="2">
            <p> <b>环境：</b> </p>
          </Col>
          <Col span="10">
            <p> {{row.env}} </p>
          </Col>
          <Col span="2">
            <p> <b>工单状态：</b>  </p>
          </Col>
          <Col span="10">
            <p v-if="row.status == -4" > <Tag color="red">回滚失败</Tag> </p>
            <p v-if="row.status == -3" > <Tag>回滚成功</Tag> </p>
            <p v-else-if="row.status == -2" > <Tag>已暂停</Tag> </p>
            <p v-else-if="row.status == -1" > <Tag color="blue">待执行</Tag> </p>
            <p v-else-if="row.status == 0" > <Tag color="green">执行成功</Tag> </p>
            <p v-else-if="row.status == 1" > <Tag color="yellow">已放弃</Tag> </p>
            <p v-else-if="row.status == 2" > <Tag color="red">任务异常</Tag> </p>
            <p v-else-if="row.status == 3" > <Tag color="blue">审批通过</Tag> </p>
            <p v-else-if="row.status == 4" > <Tag color="yellow">审批驳回</Tag> </p>
            <p v-else-if="row.status == 5" > <Tag color="blue">已定时</Tag> </p>
            <p v-else-if="row.status == 6" > <Tag color="blue">执行中</Tag> </p>
          </Col>
        </Row>
        <Row style="line-height:30px;">
          <Col span="2">
            <p> <b>备注：</b> </p>
          </Col>
          <Col span="10">
            <p> {{row.remark ? row.remark : '&nbsp;'}} </p>
          </Col>
          <Col span="2">
            <p> <b>执行耗时：</b> </p>
          </Col>
          <Col span="10">
            <p> {{row.execute_time ? row.execute_time : '&nbsp;'}} s</p>
          </Col>
        </Row>
        <Row style="line-height:30px;">
          <Col span="2">
            <p> <b>定时执行：</b> </p>
          </Col>
          <Col span="10">
            <p> {{row.cron_time ? row.cron_time : '&nbsp;' }} </p>
          </Col>
          <Col span="2">
            <p> <b>执行错误：</b> </p>
          </Col>
          <Col span="10">
            <p> {{row.execute_errors ? row.execute_errors : '&nbsp;' }}</p>
          </Col>
        </Row>
      </div>
    </div>
</template>

<script>
export default {
  props: ['row', 'sqlContent'],
  computed: {
    getTime: function () {
      return this.row.createtime.split('.')[0].replace('T',' ')
    } 
  }
}
</script>


