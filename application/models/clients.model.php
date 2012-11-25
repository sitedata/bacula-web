<?php
 /*
  +-------------------------------------------------------------------------+
  | Copyright 2010-2012, Davide Franco			                            |
  |                                                                         |
  | This program is free software; you can redistribute it and/or           |
  | modify it under the terms of the GNU General Public License             |
  | as published by the Free Software Foundation; either version 2          |
  | of the License, or (at your option) any later version.                  |
  |                                                                         |
  | This program is distributed in the hope that it will be useful,         |
  | but WITHOUT ANY WARRANTY; without even the implied warranty of          |
  | MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the           |
  | GNU General Public License for more details.                            |
  +-------------------------------------------------------------------------+
 */

 class Clients_Model extends CModel {

    // ==================================================================================
	// Function: 	count_Clients()
	// Parameters:	$pdo_connection - valide pdo object
	// Return:		Number of clients
	// ==================================================================================
	static public function count_Clients( $pdo_connection ) {
		$result 	= null;
		$statment 	= array( 'table' => CModel::get_Table('Client'), 'fields' => array('COUNT(*) AS nb_client') );

		$result 	= CDBUtils::runQuery( CDBQuery::get_Select( $statment ), $pdo_connection ); 
		
		$result 	= $result->fetch();
		return $result['nb_client'];
	}
 }    