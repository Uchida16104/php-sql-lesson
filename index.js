var mysql = require('mysql');
 
var connection = mysql.createConnection({
  host: "127.0.0.1",
  user: "root",
  password: "root_password",
  database: "foo"
});
 
connection.connect(function(err) {
  if (err) throw err;
  console.log("Connected to MySQL DB!");
});
