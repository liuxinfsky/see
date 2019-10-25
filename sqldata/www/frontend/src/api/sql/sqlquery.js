import axios from '../../libs/http';
const dbConfs = '/api/sqlmng/dbconfs/';
const dbtablecount = '/api/sqlmng/dbtablecount/';

export function GetTableList(id) {
    return axios.get(dbConfs + id + '/tables/');
}

export function GetDbTableCount (params) {
    return axios({
        url: dbtablecount,
        method: 'get',
        params
    });
}

export function GetTableInfo(id, tableName) {
    return axios.get(dbConfs + id + '/table_info/?table_name=' + tableName);
}

export function GetSqlAdvisor (id, data) {
    return axios({
        url: dbConfs + id + '/sql_advisor/',
        method: 'post',
        data: data
    });
}

export function GetSqlSOAR (id, data) {
    return axios({
        url: dbConfs + id + '/sql_soar/',
        method: 'post',
        data: data
    });
}