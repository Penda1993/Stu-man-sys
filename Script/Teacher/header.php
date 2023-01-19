<nav class="navbar navbar-expand-lg navbar-dark bg-dark" >
  <a class="navbar-brand" href="javascript:void(0)"><img class="rounded-circle float-left" src="img/<?php echo $t['img'];?>" style="width:45px;height:40px;"></a>
  <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navb">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navb">
    <ul class="navbar-nav mr-auto">
       <li class="nav-item dropdown">
      <a class="nav-link" href="#" id="navbardrop" data-toggle="dropdown">
      Welcome, <?php echo $t['f_name']." ".$t['l_name'];?>
        
      </a>
      
    </li>
    </ul>
    
    <form class="form-inline my-2 my-lg-0">
          <a href="edit.php" class="navbar" style="padding-left:20px;color:white;"><i class="fa fa-fw fa-user"></i>Edit</a>
					<a href="logout.php" class="navbar" style="padding-left:20px;color:white;"><i class="fa fa-fw fa-lock"></i>Logout</a>
        </form>
  
  </div>
</nav>