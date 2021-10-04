// Application configuration.
'use strict';
var config = module.exports;
const sql = require('mssql');

config.keys = {
    secret: '/jVdfUX+u/Kn3qPY4+ahjwQgyV5UhkM5cdh1i2xhozE=' // Not anymore...
};

config.db = {
    user: 'Gigabetz',
    password: 'Qf91v1%q',
    server: '209.205.211.2',
    database: 'Gigabetz',
    pool: {
        max: 10,
        min: 0,
        idleTimeoutMillis: 30000
    },
        options: {
        encrypt: false, // for azure
        trustServerCertificate: false // change to true for local dev / self-signed certs
    }
}

config.sql = sql;