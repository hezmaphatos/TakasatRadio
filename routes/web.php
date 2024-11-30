<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function() {
    return view("index", ['title' => 'Takasat Radio']);
});

Route::get('/about', function () {
    return view('about', ['title' => 'About']);
});

Route::get('/programs', function () {
    return view('programs', ['title' => 'Programs']);
});

Route::get('/programs/{id}', function ($id) {
    $programs = [
        1 => [
            'title' => 'CERAMu',
            'image' => 'Template/assets/img/audio/ceramu.png',
            'announcer' => 'Alexa Cleophilia | Eunike',
            'producer' => 'Adhitya Dwi Guntoro',
            'vc' => 'Reva',
            'ac' => 'Sharlene C Wijaya',
            'md' => 'Alula',
            'ma' => 'alfianto',
            'op' => 'Yehezkiel Natanael',
            'meaning' => 'Cerita Seram Kamu',
            'jadwal' => nl2br("Senin | 17.00 - 19.00\nKamis | 17.00 - 19.00"),
            'content' => 'Ceramu ngapain aja yak.'
        ],
        2 => [
            'title' => 'Program 2',
            'image' => 'Template/assets/img/senin-2.jpg',
            'announcer' => 'Announcer 3 | Announcer 4',
            'producer' => 'producer 2',
            'vc' => 'vc 2',
            'ac' => 'ac 2',
            'md' => 'md 2',
            'ma' => 'ma 2',
            'op' => 'op 2',
            'meaning' => 'Program 2',
            'jadwal' => nl2br("Senin | 19.00 - 20.00\nSelasa | 17.00 - 18.00"),
            'content' => '2.'
        ],
        3 => [
            'title' => 'Program 3',
            'image' => 'Template/assets/img/senin-3.jpg',
            'announcer' => 'Announcer 5 | Announcer 6',
            'producer' => 'producer 3',
            'vc' => 'vc 3',
            'ac' => 'ac 3',
            'md' => 'md 3',
            'ma' => 'ma 3',
            'op' => 'op 3',
            'meaning' => 'Program 3',
            'jadwal' => nl2br("Senin | 20.00 - 21.00\nKamis | 19.00 - 20.00"),
            'content' => '3.'
        ],
        4 => [
            'title' => 'Program 4',
            'image' => 'Template/assets/img/selasa-1.jpg',
            'announcer' => 'Announcer 7 | Announcer 8',
            'producer' => 'producer 4',
            'vc' => 'vc 4',
            'ac' => 'ac 4',
            'md' => 'md 4',
            'ma' => 'ma 4',
            'op' => 'op 4',
            'meaning' => 'Program 4',
            'jadwal' => nl2br("Selasa | 18.00 - 19.00\nKamis | 20.00 - 21.00"),
            'content' => '4.'
        ],
        5 => [
            'title' => 'Program 5',
            'image' => 'Template/assets/img/selasa-2.jpg',
            'announcer' => 'Announcer 9 | Announcer 10',
            'producer' => 'producer 5',
            'vc' => 'vc 5',
            'ac' => 'ac 5',
            'md' => 'md 5',
            'ma' => 'ma 5',
            'op' => 'op 5',
            'meaning' => 'Program 5',
            'jadwal' => 'Selasa | 19.00 - 21.00',
            'content' => '5.'
        ],
        6 => [
            'title' => 'Program 6',
            'image' => 'Template/assets/img/rabu-2.jpg',
            'announcer' => 'Announcer 11 | Announcer 12',
            'producer' => 'producer 6',
            'vc' => 'vc 6',
            'ac' => 'ac 6',
            'md' => 'md 6',
            'ma' => 'ma 6',
            'op' => 'op 6',
            'meaning' => 'Program 6',
            'jadwal' => nl2br("Rabu | 17.00 - 18.00\nJumat | 17.00 - 18.00"),
            'content' => '6.'
        ],
        7 => [
            'title' => 'Program 7',
            'image' => 'Template/assets/img/kamis-2.jpg',
            'announcer' => 'Announcer 13 | Announcer 14',
            'producer' => 'producer 7',
            'vc' => 'vc 7',
            'ac' => 'ac 7',
            'md' => 'md 7',
            'ma' => 'ma 7',
            'op' => 'op 7',
            'meaning' => 'Program 7',
            'jadwal' => 'Rabu | 18.00 - 19.00',
            'content' => '7.'
        ],
        8 => [
            'title' => 'Program 8',
            'image' => 'Template/assets/img/jumat-1.jpg',
            'announcer' => 'Announcer 17 | Announcer 18',
            'producer' => 'producer 8',
            'vc' => 'vc 8',
            'ac' => 'ac 8',
            'md' => 'md 8',
            'ma' => 'ma 8',
            'op' => 'op 8',
            'meaning' => 'Program 8',
            'jadwal' => 'Jumat | 18.00 - 19.00',
            'content' => '8.'
        ],
        9 => [
            'title' => 'Program 9',
            'image' => 'Template/assets/img/jumat-2.jpg',
            'announcer' => 'Announcer 15 | Announcer 16',
            'producer' => 'producer 9',
            'vc' => 'vc 9',
            'ac' => 'ac 9',
            'md' => 'md 9',
            'ma' => 'ma 9',
            'op' => 'op 9',
            'meaning' => 'Program 9',
            'jadwal' => nl2br("Rabu | 19.00 - 21.00\nJumat | 19.00 - 21.00"),
            'content' => '9.'
        ],
        10 => [
            'title' => 'Daily Music',
            'image' => 'Template/assets/img/Logo.png',
            'announcer' => 'Takascrews',
            'producer' => 'producer 10',
            'vc' => 'vc 10',
            'ac' => 'ac 10',
            'md' => 'md 10',
            'ma' => 'ma 10',
            'op' => 'op 10',
            'meaning' => 'Program 10',
            'jadwal' => 'Everyday | 16.00 - 17.00',
            'content' => '10.'
        ],
    ];

    if ($id !== null) {
        if (!array_key_exists($id, $programs)) {
            abort(404);
        }
        return view('detailprograms', ['programs' => $programs[$id]]);
    }
});

Route::get('/posts/{id?}', function ($id = null) {
    $posts = [
        1 => [
            'title' => 'Ini Blog 1',
            'image' => 'Template/assets/img/blog/fotoblog1.jpg',
            'author' => 'Author 1',
            'category' => 'Misteri',
            'content' => 'Kisah ini bermula dari seorang ibu muda bernama Sari. Ia adalah seorang wanita tangguh yang harus menghadapi banyak rintangan dalam hidupnya. Sari, yang telah menjadi janda muda setelah suaminya meninggal dalam kecelakaan, harus berjuang sendirian untuk membesarkan kedua anaknya yang masih kecil. 

            Setiap hari, ia bekerja sebagai penjahit di rumah untuk memenuhi kebutuhan hidup. Namun, pendapatan yang diperoleh tidak cukup untuk memenuhi semua kebutuhan keluarga. Sari tidak pernah menyerah. Ia terus bekerja keras meskipun menghadapi banyak kesulitan. Salah satu tantangan terbesar adalah biaya pendidikan anak-anaknya. Sari bahkan harus meminjam uang untuk membayar biaya sekolah. Meskipun hidup penuh tantangan, Sari selalu berusaha untuk memberikan yang terbaik bagi anak-anaknya.

            Namun, berkat ketekunan dan kegigihan, Sari akhirnya berhasil membangun usaha menjahit yang cukup sukses. Anak-anaknya tumbuh menjadi individu yang sukses berkat pendidikan yang baik meski dari keterbatasan. Ini adalah kisah nyata tentang keteguhan hati seorang ibu yang tidak pernah menyerah pada keadaan.',
            'datetime' => 'Nov 28, 2024',
        ],
        2 => [
            'title' => 'Ini Blog 2',
            'image' => 'Template/assets/img/blog/fotoblog2.jpg',
            'author' => 'Author 2',
            'category' => 'Kriminal',
            'content' => 'ada malam yang gelap di pusat Jakarta, sebuah perampokan terjadi yang mengejutkan banyak orang. Kejadian ini dimulai ketika dua pria mengenakan masker dan membawa senjata api, memasuki sebuah toko emas yang terletak di kawasan strategis. Mereka mengancam para pegawai dan pelanggan, serta mengikat mereka sebelum membawa kabur emas dan uang tunai dengan total kerugian mencapai miliaran rupiah.

            Polisi yang menerima laporan segera melakukan pengejaran terhadap para pelaku. Dalam waktu 24 jam, dengan bantuan rekaman kamera pengawas dan bukti-bukti lain, polisi berhasil menangkap salah satu dari perampok tersebut. Diketahui bahwa kedua pelaku merupakan warga lokal yang telah merencanakan aksi perampokan ini selama berbulan-bulan. Motif mereka adalah untuk melunasi utang besar yang mereka miliki akibat perjudian.

            Kasus ini menjadi sorotan utama di media sosial dan menambah kekhawatiran masyarakat tentang maraknya kejahatan di kota besar. Banyak warga yang merasa terancam dan mendesak pihak berwenang untuk lebih meningkatkan keamanan.',
            'datetime' => 'Nov 24, 2024',
        ],
        3 => [
            'title' => 'Ini Blog 3',
            'image' => 'Template/assets/img/blog/fotoblog3.jpg',
            'author' => 'Author 3',
            'category' => 'Cerita Nyata',
            'content' => 'Pada tahun 2022, sekelompok peneliti dari berbagai negara menemukan sesuatu yang sangat mengejutkan di dalam hutan tropis Kalimantan. Mereka menemukan sebuah kota kuno yang selama ini tersembunyi dari pandangan dunia luar. Kota tersebut tidak tercatat dalam sejarah, dan diperkirakan telah ada sejak abad ke-12. 

            Penemuan ini bermula ketika tim peneliti menggunakan teknologi pemetaan terbaru untuk menelusuri daerah yang sebelumnya sulit diakses. Dengan menggunakan drone dan radar bawah tanah, mereka berhasil menemukan struktur bangunan besar yang terletak di kedalaman hutan yang lebat.

            Setelah beberapa minggu penelusuran, tim peneliti berhasil memasuki area kota yang terlupakan tersebut. Mereka menemukan sisa-sisa bangunan megah, artefak kuno, dan juga sistem saluran air yang sangat maju pada masa itu. Namun, yang paling mengejutkan adalah penemuan sejumlah patung misterius yang terbuat dari batu hitam. Sampai sekarang, asal-usul kota ini dan bagaimana bisa terlupakan masih menjadi misteri besar.

            Beberapa ahli percaya bahwa kota tersebut mungkin adalah salah satu kerajaan yang hilang dari sejarah Indonesia. Namun, sebagian lainnya menganggap penemuan ini sebagai bukti bahwa ada kebudayaan yang lebih maju yang pernah berkembang di wilayah ini jauh sebelum kedatangan penjajah.',
            'datetime' => 'Nov 21, 2024',
        ],
        4 => [
            'title' => 'Ini Blog 4',
            'image' => 'Template/assets/img/blog/fotoblog4.jpg',
            'author' => 'Author 2',
            'category' => 'Film Horror',
            'content' => 'Industri film horor Indonesia telah berkembang pesat dalam beberapa tahun terakhir, menghasilkan sejumlah film yang bukan hanya menyeramkan, tetapi juga memberikan dampak psikologis yang mendalam pada penontonnya. Salah satu film horor yang mendapat perhatian besar adalah *Kuntilanak*, yang dirilis pada tahun 2018.

            Film ini tidak hanya menggugah ketakutan melalui unsur supranatural, tetapi juga mengangkat cerita tentang rasa dendam dan balas dendam yang terjadi dalam kehidupan nyata. Dalam film ini, seorang wanita muda bernama Lia terjebak dalam misteri yang berhubungan dengan kematian tragis adiknya. Setelah beberapa kejadian aneh dan menakutkan, Lia menemukan bahwa dirinya menjadi sasaran dari roh jahat yang ingin membalas dendam.

            Film ini menjadi fenomena karena cara penyutradaraannya yang memanfaatkan ketegangan psikologis dan plot twist yang membuat penonton tidak bisa berhenti berpikir tentang cerita tersebut setelah meninggalkan bioskop. Film horor Indonesia seperti ini menunjukkan bahwa genre horor tidak hanya tentang hantu dan makhluk gaib, tetapi juga tentang trauma psikologis yang bisa sangat mengganggu penontonnya.

            Fenomena film horor Indonesia juga semakin populer karena pemilihan cerita yang menggali budaya lokal, mitos, dan legenda yang sudah dikenal oleh masyarakat. Ini memberikan pengalaman yang lebih mendalam bagi penonton yang ingin merasakan sensasi ketakutan yang berbeda dari film horor barat.',
            'datetime' => 'Nov 15, 2024',
        ],
        5 => [
            'title' => 'Ini Blog 5',
            'image' => 'Template/assets/img/blog/fotoblog5.jpg',
            'author' => 'Author 2',
            'category' => 'Penampakan',
            'content' => 'Di sebuah desa terpencil di Jawa Tengah, terdapat sebuah rumah tua yang dikenal oleh warga sekitar sebagai tempat penuh dengan kejadian-kejadian aneh dan menyeramkan. Rumah tersebut sudah lama ditinggalkan dan hanya ada satu keluarga yang berani tinggal di sana, meskipun banyak orang yang memperingatkan mereka untuk menjauhi rumah tersebut.

            Menurut cerita, rumah itu dulunya milik seorang lelaki tua bernama Pak Suryo, yang dikenal sebagai orang yang sangat tertutup. Setelah kematiannya, keluarga yang tinggal di rumah tersebut melaporkan berbagai kejadian mistis, mulai dari suara pintu yang terbuka sendiri hingga penampakan sosok wanita berbaju putih yang sering terlihat berdiri di jendela.

            Pada suatu malam, seorang warga yang penasaran memutuskan untuk menyelidiki rumah itu lebih lanjut. Ia membawa kamera dan rekaman video untuk mencoba menangkap bukti-bukti keberadaan makhluk gaib. Selama beberapa jam merekam, tiba-tiba ia melihat bayangan sosok tinggi yang melintas di hadapannya, disertai dengan suara tawa halus yang terdengar sangat dekat. Setelah kejadian itu, ia tidak berani lagi mengunjungi rumah tersebut.

            Kisah penampakan di rumah tua ini terus menjadi bahan pembicaraan di kalangan masyarakat dan banyak orang menganggap bahwa rumah tersebut memang benar-benar dihuni oleh makhluk gaib yang tidak ingin diganggu.',
            'datetime' => 'Nov 2, 2024',
        ],
    ];

    if ($id !== null) {
        if (!array_key_exists($id, $posts)) {
            abort(404);
        }
        return view('post', ['post' => $posts[$id]]);
    }

    return view('posts', ['posts' => $posts, 'title' => 'Articles']);
});