var mysql = require('mysql');
 
var connection = mysql.createConnection({
  host: "127.0.0.1",
  user: "root",
  password: "root_password",
  database: "foo"
});
 
connection.connect(function() {
  console.log("Connected to MySQL DB!");
});