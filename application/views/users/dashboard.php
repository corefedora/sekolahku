<h2>Dashboard User</h2><br/>
Anda adalah :
<?php
if ($this->session->userdata('type') == 'admin'):
    echo 'Admin';
elseif ($this->session->userdata('type') == 'teachers'):
    echo 'Teachers';
elseif ($this->session->userdata('type') == 'students'):
    echo 'Students';
elseif ($this->session->userdata('type') == 'alumni'):
    echo 'Alumni';
endif;
?>
<br/>
<h3><strong><?php echo anchor('users/logout', 'Logout') ?></strong></h3>