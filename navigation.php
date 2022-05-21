<div id="navigation"> 
        <div id="logo">CLVP | Web Portfolio</div>          
                <a href="index.php"><i class="fa fa-fw fa-home"></i> Home</a>
                <a href="index.php?page=works"><i class="fa fa-fw fa-laptop"></i> My Works</a>
                <a href="index.php?page=aboutme"><i class="fa fa-fw fa-user"></i> About Me</a>
                <a href="index.php?page=contactme"><i class="fa fa-fw fa-envelope"></i> Contact Me</a>   
                <?php 
        switch($page) {
            case "works":
                include "My Works/works.php";
                break;
                case "aboutme":
                    include "About Me/aboutme.php";
                    break;
                case "contactme":
                  include "Contact Me/contactme.php";
                  break;
                    default:
                    include "default.php";
                    break;
        }?>            
        </div>