<style type="text/css">
  .header {
  overflow: hidden;
  background-color: ;
  background-image: url(logo.png);
  background-size: 7%;
  background-repeat: no-repeat;
  padding: 20px 10px;
}
.header a {
  float: left;
  color: black;
  text-align: center;
  padding: 12px;
  text-decoration: none;
  font-size: 18px; 
  line-height: 25px;
  border-radius: 4px;
}
.header a.logo {
  font-size: 25px;
  font-weight: bold;
}
.header a:hover {
  background-color: #ddd;
  color: black;
}
.header-right {
  float: right;
}
@media screen and (max-width: 500px) {
  .header a {
    float: none;
    display: block;
    text-align: left;
  }
  .header-right {
    float: none;
  }
</style>
<div class="header">
  <div class="header-right">
    <a class="active" onclick="window.location.href='index.php';">Home</a>
    <a class="active" onclick="window.location.href='transfermoney.php';">Transfer</a>
    <a class="active" onclick="window.location.href='createuser.php';">Create user</a>
    <a class="active" onclick="window.location.href='transactionhistory.php';">History</a>
  </div>