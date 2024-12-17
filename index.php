<?php
// Cover
$cv_wedname = "FULAN & FULIN";
    if ($_SERVER['REQUEST_METHOD'] === 'GET') {
        $cv_guestname = $_REQUEST['guest_cv'];
        echo $cv_guestname;
    }
$cv_timedate = "19 . 10 . 2024";
// Groom
$pfp_groomname = "Fulan Bin Fulanta";
$pfp_groompicture = "Asset/Assets/1Randy & Sofhia _ Cyraphoto.jpeg";
$pfp_groomsibling = "kedua";
$pfp_groomdad = "Indra Jonaidi";
$pfp_groommom = "Sabariah";
$pfp_groommedia = "https://www.instagram.com/ssenoo__/";
// Bride
$pfp_bridename = "Fulan Bin Fulanta";
$pfp_bridepicture = "Asset/Assets/Bride.jpeg";
$pfp_bridesibling = "kedua";
$pfp_bridedad = "Puji Jonaidi";
$pfp_bridemom = "Dewi";
$pfp_bridemedia = "https://www.instagram.com/ssenoo__/";

$akad_date = "Minggu, 27 Agustus 2022";
$akad_time = "Pukul 08.00 WIB";
$akad_place = "Gedung Smkn 1 Bekasi";
$akad_addres = "Jl. Bintara VIII No.2, RT.005/RW.003, Bintara, Kec. Bekasi Bar., Kota Bks, Jawa Barat 17134";

$map_loc = "https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63460.246857755825!2d106.88050534863282!3d-6.228695!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e698c89a57526f1%3A0xa850dc0a366b403c!2sSMKN%201%20Bekasi!5e0!3m2!1sen!2sid!4v1726017135657!5m2!1sen!2sid";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="content.js">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
</head>
<body>
    <audio id="audio" src="Asset/Audio/prewed.mp3" loop></audio>
    <div id="cover" class="cover">
        <center>
        <div class="title-cv">
            <p>THE WEDDING OF</p>
            <div class="img-cv"><img src="Asset/Assets/Untitled_design-removebg-preview.png" alt=""></div> 
            <h1 id="name_cv"><?= $cv_wedname ?></h1>
            <p>We're Inviting:</p><br><p id="guest_cv" method="get"><?= $cv_guestname ?></p>
            <button id="closeButton" class="close-button">Close Cover</button>
            <h2 id="date_cv"><?= $cv_timedate ?></h2>
        </div>
        </center>
    </div>
    <button id="muteButton" class="muteButton"><i class="fas fa-volume-up"></i></button>
    <div id="nav">
        <ul>
            <center>
                <li><a href="#sc_1" class="nav-link active" onclick="setActive(this)"><i class="fa-solid fa-comment"></i></a></li>
                <li><a href="#sc-2" class="nav-link" onclick="setActive(this)"><i class="fa-solid fa-mars"></i></a></li>
                <li><a href="#sc-3" class="nav-link" onclick="setActive(this)"><i class="fa-solid fa-venus"></i></a></li>
                <li><a href="#sc-4" class="nav-link" onclick="setActive(this)"><i class="fa-solid fa-calendar-days"></i></a></li>
                <li><a href="#sc-5" class="nav-link" onclick="setActive(this)"><i class="fa-solid fa-map-location-dot"></i></a></li>
                <li><a href="#sc-6" class="nav-link" onclick="setActive(this)"><i class="fa-solid fa-image"></i></a></li>
                <li><a href="#sc-12" class="nav-link" onclick="setActive(this)"><i class="fa-solid fa-video"></i></a></li>
                <li><a href="#sc-7" class="nav-link" onclick="setActive(this)"><i class="fa-solid fa-comment-dots"></i></a></li>
                <li><a href="#sc-8" class="nav-link" onclick="setActive(this)"><i class="fa-solid fa-file-lines"></i></a></li>
                <li><a href="#sc-9" class="nav-link" onclick="setActive(this)"><i class="fa-solid fa-face-grin-stars"></i></a></li>
                <li><a href="#sc-10" class="nav-link" onclick="setActive(this)"><i class="fa-solid fa-gifts"></i></a></li>
                <li><a href="#sc-11" class="nav-link" onclick="setActive(this)"><i class="fa-solid fa-envelope"></i></a></li>
            </center>
        </ul>
    </div>
    <div class="container">
        
        <section id="sc_1">
                <div data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1000">
                    <center>
                        <img src="Asset/Assets/0c8c46cf-a5d6-449f-8ae6-043b0509270a-removebg-preview (1).png" alt="" id="img_tp_1">
                    </center>
                </div>
                <div id="cover">
                    <img class="img-l-top" src="Asset/Assets/Векторная_мандала___Бесплатно_векторы-removebg-preview.png" alt="">
                    <img class="img-r-top" src="Asset/Assets/Векторная_мандала___Бесплатно_векторы-removebg-preview.png" alt="">
                    <img class="img-l-bot" id="img-l-bot" src="Asset/Assets/Векторная_мандала___Бесплатно_векторы-removebg-preview.png" alt="">
                    <img class="img-r-bot" id="img-r-bot" src="Asset/Assets/Векторная_мандала___Бесплатно_векторы-removebg-preview.png" alt="">
                <div id="cover-text">
                <div>
                    <p class="txt-quote">Assalamu'alaikum Wr. Wb.</p>
                    <p class="txt-quote">وَمِنْ آيَاتِهِ أَنْ خَلَقَ لَكُمْ مِنْ أَنْفُسِكُمْ أَزْوَاجًا لِتَسْكُنُوا إِلَيْهَا وَجَعَلَ بَيْنَكُمْ مَوَدَّةً وَرَحْمَةً ۚ إِنَّ فِي ذَٰلِكَ لَآيَاتٍ لِقَوْمٍ يَتَفَكَّرُونَ <br>Artinya: “Dan di antara tanda-tanda kekuasaan-Nya ialah Dia menciptakan untukmu isteri-isteri dari jenismu sendiri, supaya kamu cenderung dan merasa tenteram kepadanya, dan dijadikan-Nya diantaramu rasa kasih dan sayang. Sesungguhnya pada yang demikian itu benar-benar terdapat tanda-tanda bagi kaum yang berfikir.” (QS. Ar-Rum: 21)</p>
                </div>
                <img src="Asset/Assets/downloadddddd.png" alt="" class="flower-bottom-sc1" id="flower-bottom-sc1">
            </div>
        </section>
        <section class="sc-2" id="sc-2">
            <div data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1700">
            <img src="Asset/Assets/downloadddddd.png" alt="" class="flower-top-sc2">
            </div>
            <div id="content_2">
                <div data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1000">
                    <center>
                    <h1 class="heading-sc2">The Groom</h1>
                    <img src="<?= $pfp_groompicture ?>" alt="" class="wayang-top">
                    </center>
                </div>
                <div data-aos="fade-up" data-aos-easing="linear" data-aos-duration="1000">
                    <h2 class="txt-name"><?= $pfp_groomname ?></h2>
                    <p class="txt-quote-sc2">Putra kedua</p>
                    <br>
                    <p class="txt-quote-sc2">dari Bapak Indra Jonaidi</p>
                    <br>
                    <p class="txt-quote-sc2">dan Ibu Sabariah</p>
                    <center>
                    <div style="position: relative; top: 5vh;">
                        <a href="https://www.instagram.com/ssenoo__/">
                        <p>ssenoo__
                        <img src="Asset/Assets/Instagram_logo_2022.svg.png" alt="" style="width: 5vw;"></p>
                        </a>
                    </div>
                    </center>
                </div>
            </div>
        </section>
        <section class="sc-3" id="sc-3">
            <div data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1700">
                <img src="Asset/Assets/downloadddddd.png" alt="" class="flower-top-sc3">
            </div>
            <div id="content_2">
                <div data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1000">
                    <center>
                    <h1 class="heading-sc3">The Bride</h1>
                    <img src="<?= $pfp_bridepicture ?>" alt="" class="wayang-top">
                    </center>
                </div>
                <div data-aos="fade-up" data-aos-easing="linear" data-aos-duration="1000">
                    <h2 class="txt-name">Fulan Binti Fulanta</h2>
                    <p class="txt-quote-sc3">Putra kedua</p>
                    <br>
                    <p class="txt-quote-sc3">dari Bapak Puji Jonaidi</p>
                    <br>
                    <p class="txt-quote-sc3">dan Ibu Dewi</p>
                    <center>
                        <div style="position: relative; top: 5vh;">
                            <a href="https://www.instagram.com/ssenoo__/">
                            <p>ssenoo__
                            <img src="Asset/Assets/Instagram_logo_2022.svg.png" alt="" style="width: 5vw;"></p>
                            </a>
                        </div>
                    </center>
                </div>
            </div>
        </section>
        <section class="sc-4" id="sc-4">
            <div data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1700">
                <img src="Asset/Assets/downloadddddd.png" alt="" class="flower-top-sc3">
            </div>
            <div class="heading-1-sc4">
                <div data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1000">
                    <center>
                    <h1>Akad Nikah</h1>
                    <p>Minggu, 27 Agustus 2022</p>
                    <p>Pukul 18:00 Wita</p>
                    <br>
                    <p>Gedung Smkn 1 Bekasi</p>
                    <p>Jl. Bintara VIII No.2, RT.005/RW.003, Bintara, Kec. Bekasi Bar., Kota Bks, Jawa Barat 17134</p>
                    </center>
                </div>
                <div data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1000">
                    <center>
                    <h1>Resepsi</h1>
                    <p>Minggu, 27 Agustus 2022</p>
                    <p>Pukul 18:00 Wita</p>
                    <p>Satu Momen</p>
                    </center>
                </div>
            </div>
        </section>
        <section class="sc-5" id="sc-5">
            <div data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1700">
                <img src="Asset/Assets/downloadddddd.png" alt="" class="flower-top-sc5">
            </div>
            <div class="heading-1-sc5">
                <div data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1000">
                    <center>
                    <h1>Maps</h1>
                    <iframe src="<?= $map_loc ?>" width="300" height="250" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </center>
                </div>
                <div data-aos="fade-up" data-aos-easing="linear" data-aos-duration="1000">
                    <center>
                        <p><b>Pukul 18:00 Wita</b></p>
                        <br>
                        <p>Gedung Smkn 1 Bekasi</p>
                        <p>Jl. Bintara VIII No.2, RT.005/RW.003, Bintara, Kec. Bekasi Bar., Kota Bks, Jawa Barat 17134</p>
                    </center>
                </div>
            </div>
        </section>
        <section class="sc-6" id="sc-6">
            <div data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1700">
                <img src="Asset/Assets/downloadddddd.png" alt="" class="flower-top-sc6">
            </div>
            <div id="content_2">
                <center>
                <div data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1000">
                    <h1 class="heading-sc6">Gallery</h1>
                </div>
                <div data-aos="fade-up" data-aos-easing="linear" data-aos-duration="1000">
                    <div class="slider">
                        <div class="slider-wrapper">
                            <div class="slide">
                                <img src="Asset/Assets/Kecantikan Amanda Khairunnisa Pakai Kemben Jawa Modern Seperti Maudy Ayunda Saat Prewedding.jpeg" alt="" class="wayang-top-sc6" style="border-radius: 50px 0px 0px 0px;"><img src="Asset/Assets/8 Potret Mesra Nan Nostalgia Demian Aditya dan Sara Wijayanto Berbalut Busana Klasik hingga Pakaian Daerah.jpeg" alt="" class="wayang-top-sc6">
                                <img src="Asset/Assets/download (1).jpeg" alt="" class="wayang-top-sc6"><img src="Asset/Assets/Jawa - Indonesia traditional prewedding 🇮🇩.jpeg" alt="" class="wayang-top-sc6" style="border-radius: 0px 0px 50px 0px;">
                            </div>
                            <div class="slide">
                                <img src="Asset/Assets/Kecantikan Amanda Khairunnisa Pakai Kemben Jawa Modern Seperti Maudy Ayunda Saat Prewedding.jpeg" alt="" class="wayang-top-sc6"><img src="Asset/Assets/8 Potret Mesra Nan Nostalgia Demian Aditya dan Sara Wijayanto Berbalut Busana Klasik hingga Pakaian Daerah.jpeg" alt="" class="wayang-top-sc6" style="border-radius: 0px 50px 0px 0px;">
                                <img src="Asset/Assets/download (1).jpeg" alt="" class="wayang-top-sc6" style="border-radius: 0px 0px 0px 50px;"><img src="Asset/Assets/Jawa - Indonesia traditional prewedding 🇮🇩.jpeg" alt="" class="wayang-top-sc6">
                            </div>
                        </div>
                    </div>
                </div>
                </center>
                </div>
            </div>
        </section>
        <section class="sc-12" id="sc-12">
            <div data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1700">
                <img src="Asset/Assets/downloadddddd.png" alt="" class="flower-top-sc12">
            </div>
            <div class="heading-1-sc9">
                <div id="content_2">
                    <div data-aos="zoom-in" data-aos-easing="linear" data-aos-duration="1500">
                    <center>
                        <iframe width="300" height="305" style="border-radius: 25px; margin-top: 2vh;" src="https://www.youtube.com/embed/7PIMiDcwNvc?si=wy9ljcstr1oy_8Mo" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                        <video width="400" controls loop style="width: 80vw; border-radius: 25px;">
                            <source src="Asset/Video/videoprew.mp4" type="video/mp4">
                        </video>
                    </center>
                    </div>
                </div>
            </div>
        </section>
        <section class="sc-7" id="sc-7">
            <div data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1700">
                <img src="Asset/Assets/downloadddddd.png" alt="" class="flower-top-sc7">
            </div>
            <div class="heading-1-sc7">
                <div data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1000">
                    <center>
                    <h1>Our Love Story</h1>
                    </center>
                </div>
                <div data-aos="fade-up" data-aos-easing="linear" data-aos-duration="1000">
                    <center>
                            <div class="story-container">
                                <button class="prev-button">&#10094;</button> <!-- Tombol kiri -->
                                
                                <div class="story-track">
                                    <div class="story-slide">
                                        <img src="Asset/Assets/8 Potret Mesra Nan Nostalgia Demian Aditya dan Sara Wijayanto Berbalut Busana Klasik hingga Pakaian Daerah.jpeg" alt="" style="height: 35vh;">
                                        <h3>First Meet</h3><p>Bulan agustus 2013 kami pertama kali bertemu dalam Ospek Perkuliahan. Dalam masa kuliah kami hanya teman biasa.</p>
                                    </div>
                                    <div class="story-slide">
                                        <img src="Asset/Assets/Jawa - Indonesia traditional prewedding 🇮🇩.jpeg" alt="" style="height: 35vh;">
                                        <h3>Relationship</h3><p>25 Februari 2018 kami mengikat janji sebagai sepasang kekasih</p>
                                    </div>
                                    <div class="story-slide">
                                        <img src="Asset/Assets/Kecantikan Amanda Khairunnisa Pakai Kemben Jawa Modern Seperti Maudy Ayunda Saat Prewedding.jpeg" alt="" style="height: 35vh;">
                                        <h3>Engagement</h3><p>Lika-liku hubungan kami lalui bersama hingga kami memutuskan untuk bertunangan pada 25 Februari 2021</p>
                                    </div>
                                    <div class="story-slide">
                                        <img src="Asset/Assets/download (1).jpeg" alt="" style="height: 35vh;">
                                        <h3>Married</h3><p>Kami memutuskan untuk mengikat janji suci pernikahan pada 09 Oktober 2021</p>
                                    </div>
                                </div>
                        
                                <button class="next-button">&#10095;</button> <!-- Tombol kanan -->
                            </div>
                        </ul>
                    </center>
                </div>
            </div>
        </section>
        <section class="sc-8" id="sc-8">
            <div data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1700">
                <img src="Asset/Assets/downloadddddd.png" alt="" class="flower-top-sc8">
            </div>
            <div class="heading-1-sc8">
                <div data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1000">
                    <center>
                        <img src="Asset/BG/1Prewedding Photo with Casual Concept (1).png" alt="" class="wayang-top-sc8">
                    </center>
                </div>
                <div data-aos="fade-up" data-aos-easing="linear" data-aos-duration="1000">
                    <center>
                        <h1><b>Guest Book</b></h1>
                        <p>Kirim do'a dan ucapan anda serta <br> konfirmasi kehadiran dengan klik tombol <br> dibawah ini</p>
                        <button id="openPopup" class="btn-rsvp"> RSVP </button>
                    </center>
                </div>
            </div>
            <div id="popupForm" class="popup">
                <div class="popup-content">
                    <span class="close">&times;</span>
                    <h2>RSVP Form</h2>
                    <form id="rsvpForm">
                        <label for="name">Name:</label>
                        <input type="text" id="name" name="name" required style="margin-left: 2vh;"><br><br>
                        <label for="name">Telp:</label>
                        <input type="number" id="telp" name="telp" required style="margin-left: 4vh;"><br><br>
                        <label for="email">Email:</label>
                        <input type="email" id="email" name="email" required style="margin-left: 19px;"><br><br>
                        <label for="attending">kehadiran</label>
                        <div>
                        <input type="radio" id="hadir" name="hadir" required><label for="hadir"> Hadir</label><br><br>
                        </div>
                        <div>
                            <input type="radio" id="tidak-hadir" name="hadir" required><label for="tidak-hadir">Tidak Hadir</label><br><br>
                        </div>
                        <label for="attending">Tipe Makanan</label>
                        <div>
                        <input type="checkbox" id="email" name="email" required> Vegetarian<br><br>
                        </div>
                        <div>
                            <input type="checkbox" id="email" name="email" required> Karnivor<br><br>
                        </div>
                        <textarea id="message" name="message" rows="4"
                                placeholder="Tambahan" required></textarea>
                        <label for="attending">Will you attend?</label>
                        <select id="attending" name="attending" required>
                            <option value="yes">Mobil</option>
                            <option value="no">Motor</option>
                            <option value="maybe">Transportasi Umum</option>
                        </select><br><br>
                        <center><button type="submit" class="btn-submit">Submit</button></center>
                    </form>
                </div>
            </div>
        </section>
        <section class="sc-9" id="sc-9">
            <div data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1700">
                <img src="Asset/Assets/downloadddddd.png" alt="" class="flower-top-sc9">
            </div>
            <div class="heading-1-sc9">
                <div data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1000">
                    <center>
                    <h1>Special Guest</h1>
                    </center>
                </div>
                <div data-aos="zoom-in" data-aos-easing="linear" data-aos-duration="1000">
                    <center>
                        <table>
                            <thead>
                            <tr>
                                <th rowspan="2">Name</th>
                                <th colspan="2">Keterangan</th>
                            </tr>
                            <tr>
                                <th>Title</th>
                                <th>Seat</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>Pujianto</td>
                                <td>Sepuh Batu Akik</td>
                                <td>2</td>
                            </tr>
                            <tr>
                                <td>Astuti</td>
                                <td>IRT</td>
                                <td>5</td>
                            </tr>
                            <tr>
                                <td>Ambarawa</td>
                                <td>Drummer</td>
                                <td>4</td>
                            </tr>
                            <tr>
                                <td>Heri</td>
                                <td>Wiraswasta</td>
                                <td>3</td>
                            </tr>
                            <tr>
                                <td>Erwin</td>
                                <td>Kang Daging</td>
                                <td>17</td>
                            </tr>
                            <tr>
                                <td>Anies</td>
                                <td>English Teacher</td>
                                <td>15</td>
                            </tr>
                            </tbody>
                        </table>
                        </center>
                    </center>
                </div>
            </div>
        </section>
        <section class="sc-10" id="sc-10">
            <div data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1700">
                <img src="Asset/Assets/downloadddddd.png" alt="" class="flower-top-sc10">
            </div>
            <div class="heading-1-sc10">
                <div data-aos="flip-down" data-aos-easing="linear" data-aos-duration="1000">
                    <center>
                    <div class="box1">
                        <img src="Asset/Assets/Logo-Bank-BCA-1.png" alt="">
                        <p>Nama: Senowww</p>
                        <p>No Rekening:</p>
                        <input type="text" value="1234567" id="textToCopy" readonly>
                        <button id="copyButton" style="border-radius: 25px;">Copy Text</button>
                    </div>
                    </center>
                </div>
                <center>
                <h1>Send Gift</h1>
                </center>
                <div data-aos="flip-up" data-aos-easing="linear" data-aos-duration="1000">
                    <center>
                    <div class="box2">
                        <img src="Asset/Assets/GKL14_OVO - Koleksilogo.com.png" alt="">
                        <p>Nama: Senowww</p>
                        <p>No Telp:</p>
                        <input type="text" value="1234567" id="textToCopy" readonly>
                        <button id="copyButton" style="border-radius: 25px;">Copy Text</button>
                    </div>
                    </center>
                </div>
            </div>
        </section>
        <section class="sc-11" id="sc-11">
            <div data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1700">
                <img src="Asset/Assets/downloadddddd.png" alt="" class="flower-top-sc11">
            </div>
            <div class="heading-1-sc11">
                <div data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1000">
                    <center>
                    <h1>Letters</h1>
                    <div class="message-container">
                        <h2 data-aos="zoom-in">Pesan & Doa untuk Pengantin</h2>
                        <form id="messageForm">
                            <textarea id="message" name="message" rows="4"
                                placeholder="Tulis namamu.." required></textarea>
                            <textarea id="message" name="message" rows="4"
                                placeholder="Tulis pesan atau doa Anda di sini..." required class="pesan-txt"></textarea>
                            <button type="submit">Kirim Pesan</button>
                        </form>
                    </div>
                    </center>
                </div>
                <div class="heading-2-sc11">
                <div data-aos="fade-up" data-aos-easing="linear" data-aos-duration="1000">
                    <center>
                        <h1>Thank You</h1>
                        <p>Merupakan suatu kebahagiaan bagi kami atas kehadiran Bapak/Ibu untuk memberikan doa restu</p><br>
                        Hormat Kami Yang Mengundang
                    </center>
                </div>
            </div>
        </section>
    </div>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
    AOS.init();
</script>
<script src="content.js"></script>
<script src="https://kit.fontawesome.com/40af89ec6d.js" crossorigin="anonymous"></script>
    
</body>
</html>
