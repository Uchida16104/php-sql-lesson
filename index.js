const mysql = require('mysql');
 
var client = mysql.createClient({
  host: "127.0.0.1",
  user: "root",
  password: "root_password",
  database: "foo"
});
 
client.connect(function(err) {
  if (err) throw err;
  console.log("Connected to MySQL DB!");
});
