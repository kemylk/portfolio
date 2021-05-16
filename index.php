<?php

include("vue/entete.php") ;
include("vue/menu.php") ;

if(!isset($_REQUEST['uc']))
     $uc = 'accueil';
else
	$uc = $_REQUEST['uc'];
	 
switch($uc)
{
	case 'accueil':
		{include("vue/accueil.php");
		break;
		}
	case 'CV':
		{include("vue/CV.php");
		break;
		}
	case 'PPE' :
		{include("vue/ppe.php");
		break;
		}
	case 'PPE_mission1' :
		{ include("vue/ppe_mission1.php");
		break; 
		}
	case 'PPE_mission2' :
		{ include("vue/ppe_mission2.php");
		break; 
		}
	case 'PPE_mission3' :
			{ include("vue/ppe_mission3.php");
			break; 
			}
    case 'veille_technologique' :
				{ include("vue/veille_technologique.php");
				break; 
				}
	case 'GLPI' :
					{ include("vue/glpi.php");
					break; 
					}
	case 'Stage' :
						{ include("vue/stage.php");
						break; 
						}

}

include("vue/pied.php") ;
?>





