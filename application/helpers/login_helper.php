<?php

function is_already_login() {
    $ci = get_instance();
    if ($ci->session->userdata('nipp') && $ci->session->userdata('id_daop') == 1) {
        redirect('daop_1/gangguan');
    }elseif ($ci->session->userdata('nipp') && $ci->session->userdata('id_daop') == 2) {
        redirect('daop_2/gangguan');
    }elseif ($ci->session->userdata('nipp') && $ci->session->userdata('id_daop') == 3) {
        redirect('daop_3/gangguan');
    }elseif ($ci->session->userdata('nipp') && $ci->session->userdata('id_daop') == 4) {
        redirect('daop_4/gangguan');
    }elseif ($ci->session->userdata('nipp') && $ci->session->userdata('id_daop') == 5) {
        redirect('daop_5/gangguan');
    }elseif ($ci->session->userdata('nipp') && $ci->session->userdata('id_daop') == 6) {
        redirect('daop_6/gangguan');
    }elseif ($ci->session->userdata('nipp') && $ci->session->userdata('id_daop') == 7) {
        redirect('daop_7/gangguan');
    }elseif ($ci->session->userdata('nipp') && $ci->session->userdata('id_daop') == 8) {
        redirect('daop_8/gangguan');
    }elseif ($ci->session->userdata('nipp') && $ci->session->userdata('id_daop') == 9) {
        redirect('daop_9/gangguan');
    }elseif ($ci->session->userdata('nipp')) {
        redirect('dashboard');
    }
}

function is_not_login() {
    $ci = get_instance();
    if (!$ci->session->userdata('nipp')) {
		redirect('auth');
	}
}