
        <!--**********************************
            Sidebar start
        ***********************************-->
        <div class="quixnav">
            <div class="quixnav-scroll">
                <ul class="metismenu" id="menu">
                    <?php if($this->session->userdata('id_role') == 1) : ?>
                        <li class="nav-label first">Main Menu</li>
                        <li><a href="<?= base_url("dashboard") ?>" aria-expanded="false"><i class="icon icon-analytics"></i><span class="nav-text">Dashboard</span></a></li>
                        <li><a href="<?= base_url("user_management") ?>" aria-expanded="false"><i class="icon icon-single-04"></i><span class="nav-text">Manajemen Akun</span></a></li>
                        <li class="nav-label">GANGGUAN</li>
                        <!-- <li><a href="" aria-expanded="false"><i class="icon icon-layout-25"></i><span class="nav-text">Kantor Pusat</span></a></li> -->
                        <li><a class="has-arrow" href="javascript:void()" aria-expanded="false"><i
                            class="icon icon-layout-25"></i><span class="nav-text">DAOP 1</span></a>
                            <ul aria-expanded="false">
                                <li><i class="icon icon-note"></i><a href="<?= base_url("daop_1/gangguan") ?>">Monitoring</a></li>
                                <li><a href="<?= base_url("daop_1/add_data") ?>">Input Data</a></li>
                            </ul>
                        </li>
                        <li><a class="has-arrow" href="javascript:void()" aria-expanded="false"><i
                            class="icon icon-layout-25"></i><span class="nav-text">DAOP 2</span></a>
                            <ul aria-expanded="false">
                                <li><i class="icon icon-note"></i><a href="<?= base_url("daop_2/gangguan") ?>">Monitoring</a></li>
                                <li><a href="<?= base_url("daop_2/add_data") ?>">Input Data</a></li>
                            </ul>
                        </li>
                        <li><a class="has-arrow" href="javascript:void()" aria-expanded="false"><i
                            class="icon icon-layout-25"></i><span class="nav-text">DAOP 3</span></a>
                            <ul aria-expanded="false">
                                <li><i class="icon icon-note"></i><a href="<?= base_url("daop_3/gangguan") ?>">Monitoring</a></li>
                                <li><a href="<?= base_url("daop_3/add_data") ?>">Input Data</a></li>
                            </ul>
                        </li>
                        <li><a class="has-arrow" href="javascript:void()" aria-expanded="false"><i
                            class="icon icon-layout-25"></i><span class="nav-text">DAOP 4</span></a>
                            <ul aria-expanded="false">
                                <li><i class="icon icon-note"></i><a href="<?= base_url("daop_4/gangguan") ?>">Monitoring</a></li>
                                <li><a href="<?= base_url("daop_4/add_data") ?>">Input Data</a></li>
                            </ul>
                        </li>
                        <li><a class="has-arrow" href="javascript:void()" aria-expanded="false"><i
                            class="icon icon-layout-25"></i><span class="nav-text">DAOP 5</span></a>
                            <ul aria-expanded="false">
                                <li><i class="icon icon-note"></i><a href="<?= base_url("daop_5/gangguan") ?>">Monitoring</a></li>
                                <li><a href="<?= base_url("daop_5/add_data") ?>">Input Data</a></li>
                            </ul>
                        </li>
                        <li><a class="has-arrow" href="javascript:void()" aria-expanded="false"><i
                            class="icon icon-layout-25"></i><span class="nav-text">DAOP 6</span></a>
                            <ul aria-expanded="false">
                                <li><i class="icon icon-note"></i><a href="<?= base_url("daop_6/gangguan") ?>">Monitoring</a></li>
                                <li><a href="<?= base_url("daop_6/add_data") ?>">Input Data</a></li>
                            </ul>
                        </li>
                        <li><a class="has-arrow" href="javascript:void()" aria-expanded="false"><i
                            class="icon icon-layout-25"></i><span class="nav-text">DAOP 8</span></a>
                            <ul aria-expanded="false">
                                <li><i class="icon icon-note"></i><a href="<?= base_url("daop_7/gangguan") ?>">Monitoring</a></li>
                                <li><a href="<?= base_url("daop_7/add_data") ?>">Input Data</a></li>
                            </ul>
                        </li>
                        <li><a class="has-arrow" href="javascript:void()" aria-expanded="false"><i
                            class="icon icon-layout-25"></i><span class="nav-text">DAOP 8</span></a>
                            <ul aria-expanded="false">
                                <li><i class="icon icon-note"></i><a href="<?= base_url("daop_8/gangguan") ?>">Monitoring</a></li>
                                <li><a href="<?= base_url("daop_8/add_data") ?>">Input Data</a></li>
                            </ul>
                        </li>
                        <li><a class="has-arrow" href="javascript:void()" aria-expanded="false"><i
                            class="icon icon-layout-25"></i><span class="nav-text">DAOP 9</span></a>
                            <ul aria-expanded="false">
                                <li><i class="icon icon-note"></i><a href="<?= base_url("daop_9/gangguan") ?>">Monitoring</a></li>
                                <li><a href="<?= base_url("daop_9/add_data") ?>">Input Data</a></li>
                            </ul>
                        </li>
                        <li><a class="has-arrow" href="javascript:void()" aria-expanded="false"><i
                            class="icon icon-layout-25"></i><span class="nav-text">DIVRE 1</span></a>
                            <ul aria-expanded="false">
                                <li><i class="icon icon-note"></i><a href="<?= base_url("divre_1/gangguan") ?>">Monitoring</a></li>
                                <li><a href="<?= base_url("divre_1/add_data") ?>">Input Data</a></li>
                            </ul>
                        </li>
                        <li><a class="has-arrow" href="javascript:void()" aria-expanded="false"><i
                            class="icon icon-layout-25"></i><span class="nav-text">DIVRE 2</span></a>
                            <ul aria-expanded="false">
                                <li><i class="icon icon-note"></i><a href="<?= base_url("divre_2/gangguan") ?>">Monitoring</a></li>
                                <li><a href="<?= base_url("divre_2/add_data") ?>">Input Data</a></li>
                            </ul>
                        </li>
                        <li><a class="has-arrow" href="javascript:void()" aria-expanded="false"><i
                            class="icon icon-layout-25"></i><span class="nav-text">DIVRE 3</span></a>
                            <ul aria-expanded="false">
                                <li><i class="icon icon-note"></i><a href="<?= base_url("divre_3/gangguan") ?>">Monitoring</a></li>
                                <li><a href="<?= base_url("divre_3/add_data") ?>">Input Data</a></li>
                            </ul>
                        </li>
                        <li><a class="has-arrow" href="javascript:void()" aria-expanded="false"><i
                            class="icon icon-layout-25"></i><span class="nav-text">DIVRE 4</span></a>
                            <ul aria-expanded="false">
                                <li><i class="icon icon-note"></i><a href="<?= base_url("divre_4/gangguan") ?>">Monitoring</a></li>
                                <li><a href="<?= base_url("divre_4/add_data") ?>">Input Data</a></li>
                            </ul>
                        </li>
                    <?php elseif($this->session->userdata('id_role') == 2) : ?>
                        <li class="nav-label first">Main Menu</li>
                        <li><a href="<?= base_url("dashboard") ?>" aria-expanded="false"><i class="icon icon-analytics"></i><span class="nav-text">Dashboard</span></a></li>
                        <li class="nav-label">GANGGUAN</li>
                        <li><a class="has-arrow" href="javascript:void()" aria-expanded="false"><i
                            class="icon icon-layout-25"></i><span class="nav-text">DAOP 1</span></a>
                            <ul aria-expanded="false">
                                <li><i class="icon icon-note"></i><a href="<?= base_url("daop_1/gangguan") ?>">Monitoring</a></li>
                            </ul>
                        </li>
                        <li><a class="has-arrow" href="javascript:void()" aria-expanded="false"><i
                            class="icon icon-layout-25"></i><span class="nav-text">DAOP 2</span></a>
                            <ul aria-expanded="false">
                                <li><i class="icon icon-note"></i><a href="<?= base_url("daop_2/gangguan") ?>">Monitoring</a></li>
                            </ul>
                        </li>
                        <li><a class="has-arrow" href="javascript:void()" aria-expanded="false"><i
                            class="icon icon-layout-25"></i><span class="nav-text">DAOP 3</span></a>
                            <ul aria-expanded="false">
                                <li><i class="icon icon-note"></i><a href="<?= base_url("daop_3/gangguan") ?>">Monitoring</a></li>
                            </ul>
                        </li>
                        <li><a class="has-arrow" href="javascript:void()" aria-expanded="false"><i
                            class="icon icon-layout-25"></i><span class="nav-text">DAOP 4</span></a>
                            <ul aria-expanded="false">
                                <li><i class="icon icon-note"></i><a href="<?= base_url("daop_4/gangguan") ?>">Monitoring</a></li>
                            </ul>
                        </li>
                        <li><a class="has-arrow" href="javascript:void()" aria-expanded="false"><i
                            class="icon icon-layout-25"></i><span class="nav-text">DAOP 5</span></a>
                            <ul aria-expanded="false">
                                <li><i class="icon icon-note"></i><a href="<?= base_url("daop_5/gangguan") ?>">Monitoring</a></li>
                            </ul>
                        </li>
                        <li><a class="has-arrow" href="javascript:void()" aria-expanded="false"><i
                            class="icon icon-layout-25"></i><span class="nav-text">DAOP 6</span></a>
                            <ul aria-expanded="false">
                                <li><i class="icon icon-note"></i><a href="<?= base_url("daop_6/gangguan") ?>">Monitoring</a></li>
                            </ul>
                        </li>
                        <li><a class="has-arrow" href="javascript:void()" aria-expanded="false"><i
                            class="icon icon-layout-25"></i><span class="nav-text">DAOP 7</span></a>
                            <ul aria-expanded="false">
                                <li><i class="icon icon-note"></i><a href="<?= base_url("daop_7/gangguan") ?>">Monitoring</a></li>
                            </ul>
                        </li>
                        <li><a class="has-arrow" href="javascript:void()" aria-expanded="false"><i
                            class="icon icon-layout-25"></i><span class="nav-text">DAOP 8</span></a>
                            <ul aria-expanded="false">
                                <li><i class="icon icon-note"></i><a href="<?= base_url("daop_8/gangguan") ?>">Monitoring</a></li>
                            </ul>
                        </li>
                        <li><a class="has-arrow" href="javascript:void()" aria-expanded="false"><i
                            class="icon icon-layout-25"></i><span class="nav-text">DAOP 9</span></a>
                            <ul aria-expanded="false">
                                <li><i class="icon icon-note"></i><a href="<?= base_url("daop_9/gangguan") ?>">Monitoring</a></li>
                            </ul>
                        </li>
                        <li><a class="has-arrow" href="javascript:void()" aria-expanded="false"><i
                            class="icon icon-layout-25"></i><span class="nav-text">DIVRE 1</span></a>
                            <ul aria-expanded="false">
                                <li><i class="icon icon-note"></i><a href="<?= base_url("divre_1/gangguan") ?>">Monitoring</a></li>
                            </ul>
                        </li>
                        <li><a class="has-arrow" href="javascript:void()" aria-expanded="false"><i
                            class="icon icon-layout-25"></i><span class="nav-text">DIVRE 2</span></a>
                            <ul aria-expanded="false">
                                <li><i class="icon icon-note"></i><a href="<?= base_url("divre_2/gangguan") ?>">Monitoring</a></li>
                            </ul>
                        </li>
                        <li><a class="has-arrow" href="javascript:void()" aria-expanded="false"><i
                            class="icon icon-layout-25"></i><span class="nav-text">DIVRE 3</span></a>
                            <ul aria-expanded="false">
                                <li><i class="icon icon-note"></i><a href="<?= base_url("divre_3/gangguan") ?>">Monitoring</a></li>
                            </ul>
                        </li>
                        <li><a class="has-arrow" href="javascript:void()" aria-expanded="false"><i
                            class="icon icon-layout-25"></i><span class="nav-text">DIVRE 4</span></a>
                            <ul aria-expanded="false">
                                <li><i class="icon icon-note"></i><a href="<?= base_url("divre_4/gangguan") ?>">Monitoring</a></li>
                            </ul>
                        </li>
                    <?php elseif($this->session->userdata('id_role') == 3 && $this->session->userdata('id_daop') == 1) : ?>
                        <li class="nav-label">GANGGUAN</li>
                        <li><a class="has-arrow" href="javascript:void()" aria-expanded="false"><i
                            class="icon icon-layout-25"></i><span class="nav-text">DAOP 1</span></a>
                            <ul aria-expanded="false">
                                <li><i class="icon icon-note"></i><a href="<?= base_url("daop_1/gangguan") ?>">Monitoring</a></li>
                                <li><a href="<?= base_url("daop_1/add_data") ?>">Input Data</a></li>
                            </ul>
                        </li>
                    <?php elseif($this->session->userdata('id_role') == 3 && $this->session->userdata('id_daop') == 2) : ?>
                        <li class="nav-label">GANGGUAN</li>
                        <li><a class="has-arrow" href="javascript:void()" aria-expanded="false"><i
                            class="icon icon-layout-25"></i><span class="nav-text">DAOP 2</span></a>
                            <ul aria-expanded="false">
                                <li><i class="icon icon-note"></i><a href="<?= base_url("daop_2/gangguan") ?>">Monitoring</a></li>
                                <li><a href="<?= base_url("daop_2/add_data") ?>">Input Data</a></li>
                            </ul>
                        </li>
                    <?php elseif($this->session->userdata('id_role') == 3 && $this->session->userdata('id_daop') == 3) : ?>
                        <li class="nav-label">GANGGUAN</li>
                        <li><a class="has-arrow" href="javascript:void()" aria-expanded="false"><i
                            class="icon icon-layout-25"></i><span class="nav-text">DAOP 3</span></a>
                            <ul aria-expanded="false">
                                <li><i class="icon icon-note"></i><a href="<?= base_url("daop_3/gangguan") ?>">Monitoring</a></li>
                                <li><a href="<?= base_url("daop_3/add_data") ?>">Input Data</a></li>
                            </ul>
                        </li>
                    <?php elseif($this->session->userdata('id_role') == 3 && $this->session->userdata('id_daop') == 4) : ?>
                        <li class="nav-label">GANGGUAN</li>
                        <li><a class="has-arrow" href="javascript:void()" aria-expanded="false"><i
                            class="icon icon-layout-25"></i><span class="nav-text">DAOP 4</span></a>
                            <ul aria-expanded="false">
                                <li><i class="icon icon-note"></i><a href="<?= base_url("daop_4/gangguan") ?>">Monitoring</a></li>
                                <li><a href="<?= base_url("daop_4/add_data") ?>">Input Data</a></li>
                            </ul>
                        </li>
                    <?php elseif($this->session->userdata('id_role') == 3 && $this->session->userdata('id_daop') == 5) : ?>
                        <li class="nav-label">GANGGUAN</li>
                        <li><a class="has-arrow" href="javascript:void()" aria-expanded="false"><i
                            class="icon icon-layout-25"></i><span class="nav-text">DAOP 5</span></a>
                            <ul aria-expanded="false">
                                <li><i class="icon icon-note"></i><a href="<?= base_url("daop_5/gangguan") ?>">Monitoring</a></li>
                                <li><a href="<?= base_url("daop_5/add_data") ?>">Input Data</a></li>
                            </ul>
                        </li>
                    <?php elseif($this->session->userdata('id_role') == 3 && $this->session->userdata('id_daop') == 6) : ?>
                        <li class="nav-label">GANGGUAN</li>
                        <li><a class="has-arrow" href="javascript:void()" aria-expanded="false"><i
                            class="icon icon-layout-25"></i><span class="nav-text">DAOP 6</span></a>
                            <ul aria-expanded="false">
                                <li><i class="icon icon-note"></i><a href="<?= base_url("daop_6/gangguan") ?>">Monitoring</a></li>
                                <li><a href="<?= base_url("daop_6/add_data") ?>">Input Data</a></li>
                            </ul>
                        </li>
                    <?php elseif($this->session->userdata('id_role') == 3 && $this->session->userdata('id_daop') == 7) : ?>
                        <li class="nav-label">GANGGUAN</li>
                        <li><a class="has-arrow" href="javascript:void()" aria-expanded="false"><i
                            class="icon icon-layout-25"></i><span class="nav-text">DAOP 7</span></a>
                            <ul aria-expanded="false">
                                <li><i class="icon icon-note"></i><a href="<?= base_url("daop_7/gangguan") ?>">Monitoring</a></li>
                                <li><a href="<?= base_url("daop_7/add_data") ?>">Input Data</a></li>
                            </ul>
                        </li>
                    <?php elseif($this->session->userdata('id_role') == 3 && $this->session->userdata('id_daop') == 8) : ?>
                        <li class="nav-label">GANGGUAN</li>
                        <li><a class="has-arrow" href="javascript:void()" aria-expanded="false"><i
                            class="icon icon-layout-25"></i><span class="nav-text">DAOP 8</span></a>
                            <ul aria-expanded="false">
                                <li><i class="icon icon-note"></i><a href="<?= base_url("daop_8/gangguan") ?>">Monitoring</a></li>
                                <li><a href="<?= base_url("daop_8/add_data") ?>">Input Data</a></li>
                            </ul>
                        </li>
                    <?php elseif($this->session->userdata('id_role') == 3 && $this->session->userdata('id_daop') == 9) : ?>
                        <li class="nav-label">GANGGUAN</li>
                        <li><a class="has-arrow" href="javascript:void()" aria-expanded="false"><i
                            class="icon icon-layout-25"></i><span class="nav-text">DAOP 9</span></a>
                            <ul aria-expanded="false">
                                <li><i class="icon icon-note"></i><a href="<?= base_url("daop_9/gangguan") ?>">Monitoring</a></li>
                                <li><a href="<?= base_url("daop_9/add_data") ?>">Input Data</a></li>
                            </ul>
                        </li>
                    <?php elseif($this->session->userdata('id_role') == 3 && $this->session->userdata('id_daop') == 15) : ?>
                        <li class="nav-label">GANGGUAN</li>
                        <li><a class="has-arrow" href="javascript:void()" aria-expanded="false"><i
                            class="icon icon-layout-25"></i><span class="nav-text">DIVRE 1</span></a>
                            <ul aria-expanded="false">
                                <li><i class="icon icon-note"></i><a href="<?= base_url("divre_1/gangguan") ?>">Monitoring</a></li>
                                <li><a href="<?= base_url("divre_1/add_data") ?>">Input Data</a></li>
                            </ul>
                        </li>
                    <?php elseif($this->session->userdata('id_role') == 3 && $this->session->userdata('id_daop') == 16) : ?>
                        <li class="nav-label">GANGGUAN</li>
                        <li><a class="has-arrow" href="javascript:void()" aria-expanded="false"><i
                            class="icon icon-layout-25"></i><span class="nav-text">DIVRE 2</span></a>
                            <ul aria-expanded="false">
                                <li><i class="icon icon-note"></i><a href="<?= base_url("divre_2/gangguan") ?>">Monitoring</a></li>
                                <li><a href="<?= base_url("divre_2/add_data") ?>">Input Data</a></li>
                            </ul>
                        </li>
                    <?php elseif($this->session->userdata('id_role') == 3 && $this->session->userdata('id_daop') == 17) : ?>
                        <li class="nav-label">GANGGUAN</li>
                        <li><a class="has-arrow" href="javascript:void()" aria-expanded="false"><i
                            class="icon icon-layout-25"></i><span class="nav-text">DIVRE 3</span></a>
                            <ul aria-expanded="false">
                                <li><i class="icon icon-note"></i><a href="<?= base_url("divre_3/gangguan") ?>">Monitoring</a></li>
                                <li><a href="<?= base_url("divre_3/add_data") ?>">Input Data</a></li>
                            </ul>
                        </li>
                    <?php elseif($this->session->userdata('id_role') == 3 && $this->session->userdata('id_daop') == 18) : ?>
                        <li class="nav-label">GANGGUAN</li>
                        <li><a class="has-arrow" href="javascript:void()" aria-expanded="false"><i
                            class="icon icon-layout-25"></i><span class="nav-text">DIVRE 4</span></a>
                            <ul aria-expanded="false">
                                <li><i class="icon icon-note"></i><a href="<?= base_url("divre_4/gangguan") ?>">Monitoring</a></li>
                                <li><a href="<?= base_url("divre_4/add_data") ?>">Input Data</a></li>
                            </ul>
                        </li>
                    <?php endif; ?>
                    
                </ul>
            </div>


        </div>
        <!--**********************************
            Sidebar end
        ***********************************-->
