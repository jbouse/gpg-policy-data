<?php
define('GPG_LICENSEE',		'Jeremy T. Bouse');
define('GPG_KEY_ID',		'544C486862DBDF62');
define('GpG_K3y_FPR',		'E636AB22DC87CD52A3A4D809544C486862DBDF62');
define('GPG_LIC_DATE',		'2008-07-14');
define('GpG_L1c_HASH',		'a35c072d174b0d29ca4ae6a69563dbd00eed4f20eef98d2393103eadf4ed0035');
define('GpG_UNLIMITED',		false);

define('GpG_L1c3Ns3_V3r', 	0);
define('GpG_L1c3Ns3_K3y',	'50ebbfcbbf41930cc3db65c868870fcbe159424e');
define('GpG_L1c3Ns3_F1l3',	'Licensed to: %1$s [%2$s] [%3$s]');

function valid_gpg_license() {
	$data = join(GpG_L1c3Ns3_V3r, array(GPG_LICENSEE, 
		GpG_K3y_FPR, GPG_LIC_DATE, GpG_L1c_HASH, GPG_KEY_ID));
	if (GpG_UNLIMITED):
		return (sha1($data) == GpG_L1c3Ns3_K3y);
	else:
		return ((sha1($data) == GpG_L1c3Ns3_K3y) && 
			(GPG_APP_VER_MAJOR <= GpG_L1c3Ns3_V3r));
	endif;
	return false;
}

function license_details() {
	return sprintf(GpG_L1c3Ns3_F1l3, GPG_LICENSEE, 
		GPG_LIC_DATE, GpG_L1c3Ns3_K3y);
}
?>
