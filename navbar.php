<!-- navbar -->

    <nav class="navbar navbar-expand-md navbar-light bg-violet">
        <style>
        .bg-violet{
          background-color: BLUE;
        }
      </style>
      <a class="navbar-brand" href="index.php" style="color: WHITE">TSF BANK</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="collapsibleNavbar">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item">
               <a class="nav-link" href="index.php" >HOME</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="createuser.php" >CREATE USER</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="transfermoney.php" >VIEW ALL USERS</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="transactionhistory.php" >TRANSACTION HISTORY</a>
              </li>
          </div>
       </nav>
       <style>
       .collapse .nav-item .nav-link{
         color: WHITE;
       }
       .collapse .nav-item .nav-link:hover{
         color: BLUE;
         background-color: WHITE;
         border-radius: 50px;
       }
       </style>
