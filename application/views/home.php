<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Brangkat membantu kamu merencanakan travelling kamu dengan mudah. Tinggal klik dapatkan teman wisata dan trip plan kamu dengan mudah.">
    <meta name="author" content="Brangkat">
    <meta name="msapplication-TileColor" content="transparent"/>
    <meta name="msapplication-square150x150logo" content=""/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Brangkat - Travelling? Langsung Brangkat!</title>
    <link rel="stylesheet" href="<?= base_url().'assets/css/materialize.min.css' ?>">
    <link rel="stylesheet" href="<?= base_url().'assets/css/style.css' ?>">
</head>
<body>
    <nav>
        <div class="nav-wrapper color-white">
            <div class="container">
                <div class="col s10 offset-s1">
                    <a href="<?= base_url() ?>" class="brand-logo">
                        <img src="<?= base_url().'assets/img/logo.png' ?>" alt="brangkat">
                    </a>                            
                </div>                
            </div>
        </div>
    </nav>
    
    <div class="jumbotron">
        <!-- <img class="jumbotron-img" src="<?= base_url().'assets/img/hero.png' ?>" alt=""> -->
        <div class="container">
            <span class="font-54 font-light">
                Berangkat sekarang, <br>
                Bersenang-senang kemudian
            </span><br>
            <span class="bold font-32">
                Solusi mudah untuk traveling kamu
            </span>
        </div>
    </div>

    <div class="container what center">
        <span class="bold">APA ITU BRANGKAT?</span>
        <div class="row">
            <div class="col s4 what-detail">
                <div class="what-img">
                    <img class="glasses" src="<?= base_url().'assets/img/glasses.png' ?>">                    
                </div>
                <div class="what-text">
                    <p>
                        Kami mengkurasi perjalanan terbaik untuk kamu dari berbagai sumber
                    </p>                
                </div>
            </div>
            <div class="col s4 what-detail">
                <div class="what-img">
                    <img class="hat" src="<?= base_url().'assets/img/hat.png' ?>">
                </div>
                <div class="what-text">
                    <p>
                        Ga perlu bingung merencanakan liburan, ajak teman kamu dan pilih perjalanan yang kamu suka
                    </p>                    
                </div>
            </div>
            <div class="col s4 what-detail">
                <div class="what-img">
                    <img class="bag" src="<?= base_url().'assets/img/bag.png' ?>">                    
                </div>
                <div class="what-text">
                    <p>
                        Langsung, Brangkat!
                    </p>                    
                </div>
            </div>            
        </div> 
    </div>

    <div class="container explore">
        <span class="font-light font-24">
            Perjalanan terbaik dan seru <br>
            untuk kamu yang berjiwa traveler
        </span><br><br>
        <span class="bold">PILIH PERJALANAN YANG KAMU INGINKAN</span>
        <br><br>

        <div class="row">
            <?php for ($i=0; $i < 8; $i++): ?> 
            <div class="col s3 explore-offer">
                <div class="explore-img">
                    <img src="<?= base_url().'assets/img/'.($i+1).'.png' ?>" alt="<?= $i ?>">
                </div>
                <div class="explore-text font-12">
                    <span class="explore-title bold">
                        EXPLORE LABENGKI AND SOMBORI
                    </span><br>
                    <span class="explore-location">
                        Southeast Sulawesi
                    </span><br>
                    <span class="explore-price">
                        FROM IDR 6,250,000 / PERSON
                    </span>
                </div>
            </div>  
            <?php endfor; ?>

            <span class="bold right">MORE...</span>                  
        </div>
    </div>

    <div class="container how">
        <span class="bold">BAGAIMANA CARANYA?</span>
        <br><br>
        <div class="row">
            <div class="col s6">
                <div class="how-text">
                    <table>
                        <tr>
                            <td>
                                <span class="how-number font-72 text-green bold">1</span>                                
                            </td>
                            <td>
                                <span class="how-detail font-light font-24">
                                    <span class="text-blue">Pilih paket wisata</span> yang kamu inginkan
                                </span>                                                                                
                            </td>
                        </tr>
                    </table>                    
                </div>
                <div class="how-text">
                    <table>
                        <tr>
                            <td>
                                <span class="how-number font-72 text-green bold">3</span>                                
                            </td>
                            <td>
                                <span class="how-detail font-light font-24">
                                    <span class="text-blue">Tunggu email balasan</span> untuk mekakukan pembayaran
                                </span>                                                                                
                            </td>
                        </tr>
                    </table>                                      
                </div>
            </div>
            <div class="col s6">
                <div class="how-text how-second-step">
                    <table>
                        <tr>
                            <td>
                                <span class="how-number font-72 text-green bold">2</span>                                
                            </td>
                            <td>
                                <span class="how-detail font-light font-24">
                                    <span class="text-blue">Isi Form</span> untuk mengkonfirmasi perjalanan
                                </span>                                                                                
                            </td>
                        </tr>
                    </table>                                      
                </div>
            </div>

        </div>
        <div class="center">
            <span class="font-24">dan kamu siap untuk, <b class="text-blue">Brangkat!</b></span>
        </div>
    </div>

    <div class="container contact">
        <span class="font-light font-24">
            Hubungi kami lebih lanjut
        </span><br><br>
        <span class="bold">hello@brangkat.co.id</span>
    </div>

    <script src="<?= base_url().'assets/js/jquery.min.js' ?>" defer="defer"></script>
    <script src="<?= base_url().'assets/js/materialize.min.js' ?>" defer="defer"></script>
</body>
</html>