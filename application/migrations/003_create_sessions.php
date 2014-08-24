<?php
class Migration_Create_sessions extends CI_Migration {

	public function up()
	{
            $fields = array(
                'session_id varchar(40) default \'0\' not null',
                'ip_address varchar(45) default \'0\' not null',
                'user_agent varchar(120) not null',
                'last_activity int(10) unsigned default 0 not null',
                'user_data text not null'       
            );
            
            $this->dbforge->add_field($fields);
            $this->dbforge->add_key('session_id',TRUE);
            $this->dbforge->create_table('ci_sessions');
            $this->db->query('alter table `ci_sessions` add key `last_activity_idx` (`last_activity`)');
	}

	public function down()
	{
		$this->dbforge->drop_table('ci_sessions');
	}
        
}
