@extends('layouts.main')

@section('container')
<section class="py-5 mt-5">
    <div class="container py-5">
        <p>Selamat datang di <strong>Kelusahan</strong>, sebuah platform yang memahami bahwa kehidupan tidak selalu berjalan mulus. Kami menyediakan ruang aman bagi setiap individu untuk membagikan keluh-kesahannya, merangkul momen sulit, dan merayakan ketahanan batin bersama-sama. Di Kelusahan, kami percaya bahwa setiap cerita memiliki kekuatan untuk menginspirasi, dan melalui pertukaran pengalaman, kita dapat saling mendukung dan menguatkan.</p>
        <p>Kami mengundang Anda untuk membuka pintu hati dan berbagi pengalaman hidup Anda di sini. Di tengah dunia yang penuh tekanan dan tantangan, Kelusahan hadir sebagai komunitas yang mengapresiasi kejujuran dan keberanian. Mari bersama-sama mengubah keluh menjadi kekuatan, dan bersama-sama kita bangun dukungan yang positif untuk melangkah maju. Kelusahan, tempat di mana setiap cerita dihargai dan setiap langkah dihormati.</p>
        <div class="row py-5">
            <div class="col-md-8 col-xl-6 text-center mx-auto">
                <h2 class="display-6 fw-bold mb-4">Got any <span class="underline">questions</span>?</h2>
                <p class="text-muted">Our team is always here to help. Send us a message and we'll get back to you shortly.</p>
            </div>
        </div>
        <div class="row d-flex justify-content-center">
            <div class="col-md-6">
                <div>
                    <form class="p-3 p-xl-4" method="post" data-bs-theme="light">
                        <div class="mb-3"><input class="shadow form-control" type="text" id="name-1" name="name" placeholder="Name"></div>
                        <div class="mb-3"><input class="shadow form-control" type="email" id="email-1" name="email" placeholder="Email"></div>
                        <div class="mb-3"><textarea class="shadow form-control" id="message-1" name="message" rows="6" placeholder="Message"></textarea></div>
                        <div><button class="btn btn-primary shadow d-block w-100">Send </button></div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="py-4 py-xl-5 mb-5">
    <div class="container">
        <div class="row mb-2">
            <div class="col-md-8 col-xl-6 text-center mx-auto">
                <h2 class="display-6 fw-bold mb-5"><span class="pb-3 underline">FAQ<br></span></h2>
            </div>
        </div>
        <div class="row mb-2">
            <div class="col-md-8 mx-auto">
                <div class="accordion text-muted" role="tablist" id="accordion-1">
                    <div class="accordion-item">
                        <h2 class="accordion-header" role="tab"><button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#accordion-1 .item-1" aria-expanded="true" aria-controls="accordion-1 .item-1">Apa tujuan dari platform Kelusahan?</button></h2>
                        <div class="accordion-collapse collapse show item-1" role="tabpanel" data-bs-parent="#accordion-1">
                            <div class="accordion-body">
                                <p>Kelusahan hadir dengan tujuan menciptakan ruang yang aman dan mendukung bagi individu untuk berbagi keluh-kesah dan pengalaman hidup mereka. Kami percaya bahwa melalui saling mendengarkan dan berbagi, kita dapat membangun komunitas yang menguatkan dan memberikan dukungan positif satu sama lain.</p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" role="tab"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#accordion-1 .item-2" aria-expanded="false" aria-controls="accordion-1 .item-2">Bagaimana cara berpartisipasi di Kelusahan?</button></h2>
                        <div class="accordion-collapse collapse item-2" role="tabpanel" data-bs-parent="#accordion-1">
                            <div class="accordion-body">
                                <p class="mb-0">Sangat mudah! Anda dapat mulai dengan membuat akun di platform kami dan langsung berbagi cerita atau keluhan Anda. Kami mendorong interaksi positif dan memberikan dukungan kepada anggota komunitas. Selain itu, Anda juga dapat menanggapi cerita orang lain dengan memberikan komentar dan dukungan. Kelusahan adalah tempat yang inklusif di mana setiap suara dihargai.</p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" role="tab"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#accordion-1 .item-3" aria-expanded="false" aria-controls="accordion-1 .item-3">Bagaimana Kelusahan menjaga keamanan dan privasi pengguna?</button></h2>
                        <div class="accordion-collapse collapse item-3" role="tabpanel" data-bs-parent="#accordion-1">
                            <div class="accordion-body">
                                <p class="mb-0">Keamanan dan privasi pengguna adalah prioritas utama bagi Kelusahan. Kami menggunakan langkah-langkah keamanan teknis dan kebijakan privasi yang ketat untuk melindungi informasi pribadi pengguna. Seluruh cerita dan interaksi di platform ini sepenuhnya anonim, memberikan kebebasan kepada pengguna untuk berbicara tanpa takut pengungkapan identitas. Selain itu, kami mendorong komunitas untuk membangun lingkungan yang penuh kasih dan saling menghormati.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection