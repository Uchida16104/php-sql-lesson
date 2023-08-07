var mysql = require('mysql');
 
var pool = mysql.createPool({
  host: "127.0.0.1",
  user: "root",
  password: "root_password",
  database: "foo"
});

pool.query("SELECT * FROM param;", (error, results) => {
  if (error) throw error;
  console.log(results[0]);
});
