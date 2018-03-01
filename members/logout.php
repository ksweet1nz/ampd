<?php
	include('../admin/runtime.php');
	perch_member_log_out();
	PerchUtil::redirect('/members/');
