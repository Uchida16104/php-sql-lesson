const mysql = require('mysql');
 
const connection = mysql.createConnection({
  host: "localhost",
  user: "root",
  password: "root_password",
  database: "foo"
});
 
connection.connect(function(err) {
  if (err) throw err;
  console.log("Connected to MySQL DB!");
});
