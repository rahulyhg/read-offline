<?php 
/**
	Admin Page Framework v3.8.15 by Michael Uno 
	Generated by PHP Class Files Script Generator <https://github.com/michaeluno/PHP-Class-Files-Script-Generator>
	<http://en.michaeluno.jp/read-offline>
	Copyright (c) 2013-2017, Michael Uno; Licensed under MIT <http://opensource.org/licenses/MIT> */
class Read_Offline_Settings_AdminPageFramework_Form_View___Script_OptionStorage extends Read_Offline_Settings_AdminPageFramework_Form_View___Script_Base {
    static public function getScript() {
        return <<<JAVASCRIPTS
(function ( $ ) {
            
    $.fn.aRead_Offline_Settings_AdminPageFrameworkInputOptions = {}; 
                            
    $.fn.storeRead_Offline_Settings_AdminPageFrameworkInputOptions = function( sID, vOptions ) {
        var sID = sID.replace( /__\d+_/, '___' );	// remove the section index. The g modifier is not used so it will replace only the first occurrence.
        $.fn.aRead_Offline_Settings_AdminPageFrameworkInputOptions[ sID ] = vOptions;
    };	
    $.fn.getRead_Offline_Settings_AdminPageFrameworkInputOptions = function( sID ) {
        var sID = sID.replace( /__\d+_/, '___' ); // remove the section index
        return ( 'undefined' === typeof $.fn.aRead_Offline_Settings_AdminPageFrameworkInputOptions[ sID ] )
            ? null
            : $.fn.aRead_Offline_Settings_AdminPageFrameworkInputOptions[ sID ];
    }

}( jQuery ));
JAVASCRIPTS;
        
    }
}