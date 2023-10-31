<?php
function createUser($data){
    global $conn;
    $query="INSERT INTO USER VALUES()NULL,?,?,?";


/**
 * utilisation de fonction php mysqli_prepare()
 * pour preparer la requete et creer un statement
 * cela verifie que la connexion est bonne
 * et que la requett est valide
 */
if($stmt=mysqly_prepare($conn,$query)){
    /**lectures des marqueurs(les3"?"dans la query)
     * et on bind les param
     * en indiquant leur type(s=string,i=integer)
     * en donnant la valeur des param a inserer dans la DB($data[key])
     */
    mysqly_stmt_bind_param($stmt,"sss",$data['user_name'],$data['email'],$data['pwd']);
    /*Execution de la requete */
    $result=mysqly_stmt_execute($stmt);
}
}
function updateUser($data){
    $query="update user
    set 'user_name'=?,'email'=?
    wherw'user_id'=?;";
}
?>