@extends('page.layout.main')
@section('title', 'Profile')

@section('content')
<hr class="container">
{{-- sejarah --}}
    <div class="container mt-5 wow fadeInUp" data-wow-delay="0.1s">
        <h1 class="display-5 text-center mb-4">Company History</h1>
        <hr class="mx-auto col-md-9">
        <div class="row justify-content-center">
            <div style="width: 7.5cm;height: 7.5cm">
                <img class="img-fluid mb-3" src="{{ asset('images/sejarah/sejarah.jpg') }}" alt="img-sejarah">
            </div>
            <div class="col-md-6 j">
                <p style="text-align: justify">
                    Dananjaya Design, a leading architecture and interior consulting firm in Indonesia, was established in 2020 with its initial focus on housing solutions in the country. Subsequently, in 2023, the company underwent a transformation to become "PT. Dananjaya Design Nusantara," while retaining its Architecture, Interior Design, and Product Design divisions under the name "Dananjaya Design." The company's philosophy is rooted in creating life balance through positive relationships with God, the environment, and fellow beings. Dananjaya Design is committed to bringing comfort and luxury akin to a vacation experience through interior and architectural designs that harness natural lighting, comfortable spatial arrangements, and captivating aesthetic elements. With expertise in designing various types of buildings and a commitment to high-quality standards, safety, and affordability, Dananjaya Design is poised to help realize harmonious and exquisite living spaces for its clients.
                </p>
            </div>
            <hr class="mx-auto col-md-9">
        </div>
    </div>
{{-- sejarah End --}}

{{-- visi--}}
    <div class="container mt-5 wow fadeInUp" data-wow-delay="0.1s">
        <h1 class="display-5 text-center mb-4">Vision</h1>
        <hr class="mx-auto col-md-9">
        <div class="row justify-content-center">
            <div class="col-md-9 j">
                <p style="text-align: justify">
                    Our vision is to be the foremost multi-disciplinary design consultant, guided by the principles of Nusantara Architecture, integrating culture, art, nature, and sustainable technology. We aspire to be a cherished and renowned consultancy both in Indonesia and worldwide, elevating the well-being of Indonesian societies. Our dedication lies in delivering excellence, reliability, affordability, and upholding elevated standards, while nurturing positive connections. We are driven to lead and cultivate robust associations with clients, partners, and the community.
                </p>
            </div>
            <hr class="mx-auto col-md-9">
        </div>
    </div>
{{-- visi End--}}

{{-- misi--}}
    <div class="container mt-5 wow fadeInUp" data-wow-delay="0.1s">
        <h1 class="display-5 text-center mb-4">Mission</h1>
        <hr class="mx-auto col-md-9">
        <div class="row justify-content-center">
            <div class="col-md-9 j">
                <p style="text-align: justify">
                    Exemplary Multi-Disciplinary Design: We are committed to becoming the foremost multi-disciplinary design planning consultant, focusing on the ethos of Nusantara Architecture that harmonizes culture, art, nature, and sustainable technology.
                    <ol class="j" style="text-align: justify">
                        <li>Cherished Partnership: We aspire to be the most beloved and esteemed partner, both nationally and internationally. Our pledge is to elevate the quality of life for Indonesian communities through the creation of harmonious, high-quality residential designs.</li>
                        <li>Innovative and Quality Personalized Solutions: We consistently aim to deliver innovative, high-quality personalized design solutions. Our dedication to aesthetics, sustainability, and functionality remains central to our design planning.</li>
                        <li>Cutting-edge Knowledge and Strong Collaborations: We prioritize staying abreast of the latest knowledge and technology, nurturing strong collaborations with clients and partners, and maintaining positive relationships with the community.</li>
                    </ol>
                </p>
            </div>
            <hr class="mx-auto col-md-9">
        </div>
    </div>
{{-- misi End--}}

{{-- value--}}
    <div class="container mt-5 wow fadeInUp" data-wow-delay="0.1s">
        <h1 class="display-5 text-center mb-4">Value</h1>
        <hr class="mx-auto col-md-9">
        <div class="row justify-content-center">
            <div class="col-md-9">
                <p style="text-align: justify">
                    <ol class="j" style="text-align: justify">
                        <li><b>Innovation:</b> Creativity and innovation in every design, crafting unique solutions for clients and residents.</li>
                    <li><b>Highest Quality:</b> High-quality design in aesthetics, functionality, and sustainability.</li>
                    <li><b>Client Satisfaction:</b> Understanding and earnestly fulfilling client needs.</li>
                    <li><b>Nusantara Culture:</b> Blending Nusantara culture into philosophy and home design.</li>
                    <li><b>Environmental Sustainability:</b> Prioritizing sustainability and eco-friendly technology.</li>
                    <li><b>Collaboration:</b> Strong collaboration with clients, partners, and stakeholders.</li>
                    <li><b>Integrity:</b> Acting honestly, transparently, and ethically in business.</li>
                    <li><b>Diversity:</b> Valuing differences and fostering an inclusive environment.</li>
                    <li><b>Balance:</b> Harmonizing beauty and functionality in design.</li>
                    <li><b>Continuous Improvement:</b> Remaining at the forefront of design industry developments.</li>
                </ol>
                </p>
            </div>
            <hr class="mx-auto col-md-9">
        </div>
    </div>
{{-- value End--}}

{{-- corporate culture --}}
    <div class="container mt-5 wow fadeInUp" data-wow-delay="0.1s">
        <h1 class="display-5 text-center mb-4">Corporate Culture</h1>
        <hr class="mx-auto col-md-9">
        <div class="row justify-content-center">
            <div class="col-md-9">
                <p style="text-align: justify">
                <ol class="j" style="text-align: justify">
                    <li><b>Creativity and Innovation:</b> Foster a supportive environment for fresh ideas, valuing creativity and innovation across all design aspects.</li>
                    <li><b>Solid Team Collaboration:</b> Cultivate strong teamwork, recognizing individual contributions for optimal project outcomes.</li>
                    <li><b>Client-Centric Approach:</b> Prioritize client needs and satisfaction through attentive understanding and fulfillment.</li>
                    <li><b>Collaborative Culture:</b> Promote effective collaboration with clients, partners, and stakeholders for shared successes.</li>
                    <li><b>Ethics and Integrity:</b> Uphold honesty, transparency, and ethical conduct, demonstrating integrity and social responsibility.</li>
                    <li><b>Diversity and Inclusivity:</b> Embrace diversity, creating an inclusive environment with equal opportunities.</li>
                    <li><b>Continuous Learning and Renewal:</b> Encourage ongoing learning, staying updated with industry advancements.</li>
                    <li><b>Work-Life Balance:</b> Support work-life balance, fostering a harmonious work atmosphere.</li>
                    <li><b>Environmental Awareness:</b> Focus on environmental sustainability, crafting eco-friendly designs.</li>
                    <li><b>Achievement Excellence:</b> Strive for high project achievements, making positive impacts on clients, communities, and the environment.</li>
                </ol>
                </p>
            </div>
            <hr class="mx-auto col-md-9">
        </div>
    </div>
{{-- corporate culture End --}}

{{-- Filosofi Perusahaan --}}
    <div class="container mt-5 wow fadeInUp" data-wow-delay="0.1s">
        <h1 class="display-5 text-center mb-4">Company Philosophy</h1>
        <hr class="mx-auto col-md-9">
        <div class="row justify-content-center">
            <div class="col-md-9 j">
                <p style="text-align: justify">
                    "Nusantara," originating from ancient Javanese language, refers to the archipelagic region of Indonesia. It means "islands in between," encompassing thousands of large and small islands, reflecting Indonesia's identity as an archipelagic nation that unites diverse cultures. Our design aims to evoke national pride by highlighting the distinctive features of Nusantara Architecture. This philosophy serves as the foundation of our creativity, infusing each project with the cultural richness and identity of the beautiful islands in between.
                </p>
            </div>
            <hr class="mx-auto col-md-9">
        </div>
    </div>
{{-- Filosofi Perusahaan End --}}

{{-- Makna Nama --}}
    <div class="container mt-5 wow fadeInUp" data-wow-delay="0.1s">
        <h1 class="display-5 text-center mb-4">Meaning of the Company Name</h1>
        <hr class="mx-auto col-md-9">
        <div class="row justify-content-center">
            <div class="col-md-9 j">
                <p style="text-align: justify">
                    "Dananjaya" is a name taken from the given name of one of the founders' grandmother, originating from the Sanskrit language, and means "invincible" or "owner of bestowed power". Operating in the design field, the company adopts the term "Nusantara" to signify its geographical origin. With the name “Dananjaya Design Nusantara,” the company aspires to become an unbeatable design entity, aiming to bring honor and distinction to Indonesia on the global stage.
                </p>
            </div>
            <hr class="mx-auto col-md-9">
        </div>
    </div>
{{-- Makna Nama End --}}

{{-- Makna logo --}}
    <div class="container mt-5 wow fadeInUp" data-wow-delay="0.1s">
        <h1 class="display-5 text-center mb-4">Meaning of the Company Logo</h1>
        <hr class="mx-auto col-md-9">
        <div class="row justify-content-center">
            <div class="col-md-9">
                <div class="text-center mb-3 mt-3">
                    <img style="width: 100px;height: 100px;" src="https://res.cloudinary.com/djzee3t99/image/upload/v1709273130/ddn/img/logo/logo_ase2ly.png" alt="logo">
                </div>
                <h4 class="d-flex justify-content-center align-items-center mt-3 text-center text-dark ">
                    “The Future of Nusantara”
                </h4>

                <p class="j" style="text-align: justify">
                    Image of 2 People: Two human figures with strong and confident postures, standing side by side. They create an impression of close partnership and cooperation, reflecting determination in navigating the business world.
                </p>
                <p class="j" style="text-align: justify">
                    Ibex Goat (Mountain Goat): The Ibex Goat becomes the central element in the logo as a representation of Capricorn, with touches of black, white, and gold colors. This Ibex Goat is designed with upright horns, symbolizing resilience in work and an indomitable spirit. The overall design portrays luxury and sustainability, in line with the company's philosophy.
                </p>
                <p class="j" style="text-align: justify">
                    Times New Roman Font: The company name, "PT. Dananjaya Design Nusantara," is displayed below the image in the Times New Roman font style. This font style conveys a classic and professional impression, reflecting the solidity and stability of the company.
                </p>
                <p class="j" style="text-align: justify">
                    Gold Color on Font: A gold-colored font is used to highlight the company name, adding a touch of luxury and excellence to the company's identity. This gold color also creates an elegant and prestigious impression.
                </p>
                <p class="j" style="text-align: justify">
                    This logo creates a strong and elegant image, reflecting the dynamism of business, resilience in work, and an indomitable spirit that are the core values of PT. Dananjaya Design Nusantara in facing challenges in the business world.
                </p>
            </div>
            <hr class="mx-auto col-md-9">
        </div>
    </div>
{{-- Makna logo End --}}
@endsection
