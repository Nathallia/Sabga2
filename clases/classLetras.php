<?php


class classLetras {

    public function hallarLetra($let)
    {
        $let='A';
if(!(isset($_GET['letra'])))
{
   $let='A';
}
else
{
if ($_REQUEST['letra']=='A')
{
 
  $let='A';
}
if ($_REQUEST['letra']=='B')
{
 
 $let='B';
}
if ($_REQUEST['letra']=='C')
{
 
$let='C';
}
if ($_REQUEST['letra']=='D')
{
 
$let='D';
}
if ($_REQUEST['letra']=='E')
{
   
$let='E';
}

if ($_REQUEST['letra']=='F')
{
 
$let='F';
}
if ($_REQUEST['letra']=='G')
{
  
$let='G';
}
if ($_REQUEST['letra']=='H')
{
  
$let='H';
}
if ($_REQUEST['letra']=='I')
{
 
$let='I';
}
if ($_REQUEST['letra']=='J')
{
 
$let='J';
}
if ($_REQUEST['letra']=='K')
{
 
$let='K';
}
if ($_REQUEST['letra']=='L')
{
 
$let='L';
}
if ($_REQUEST['letra']=='LL')
{
  
$let='LL';
}
if ($_REQUEST['letra']=='M')
{
  
$let='M';
}
if ($_REQUEST['letra']=='N')
{
 
$let='N';
}
if ($_REQUEST['letra']=='O')
{
 
$let='O';
}
if ($_REQUEST['letra']=='P')
{
 
$let='P';
}
if ($_REQUEST['letra']=='Q')
{
 
$let='Q';
}
if ($_REQUEST['letra']=='R')
{
  
$let='R';
}
if ($_REQUEST['letra']=='S')
{
 
$let='S';
}
if ($_REQUEST['letra']=='T')
{
  
$let='T';
}
if ($_REQUEST['letra']=='U')
{
 
$let='U';
}
if ($_REQUEST['letra']=='V')
{
  
$let='V';
}
if ($_REQUEST['letra']=='W')
{
 
$let='W';
}
if ($_REQUEST['letra']=='X')
{
 
$let='X';
}
if ($_REQUEST['letra']=='Y')
{

$let='Y';
}
if ($_REQUEST['letra']=='Z')
{

$let='Z';
}

}

return $let;
    }
}
