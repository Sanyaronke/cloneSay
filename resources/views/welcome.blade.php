@extends('layouts.app')

@section('title')
    Acceuil
@endsection
@section('description')
    La page d'acceuil
@endsection

@section('content')
    {{-- information d'acceuil --}}
    <div class="py-5 px-0 container-fluid presentation-card d-flex align-items-center">
        <div class="container mx-auto d-flex flex-wrap align-items-center justify-content-around p-0">
            <div class="col-12 col-md-10 col-lg-5 d-flex flex-column align-items-center justify-content-center message">
                <h2 class="mb-4 ">Des outils simples et efficaces pour booster les compétences de votre structure !
                </h2>
                <p class="my-3 px-5">
                    Le management par les compétences n’a jamais été aussi simple. <br> Découvrez nos applications
                    innovantes pour rendre les compétences accessibles pour vos collaborateurs et faciliter leur
                    qualification.
                </p>
                <div style="height:50px" class=" my-5">
                    <a class="btn btn-default" href="">Demander une Démo</a>
                </div>
            </div>
            <div class="col-6 presentation-card--img d-none d-md-block d-lg-block">
                <img class="w-100" src="{{ 'images/web/presentation.png' }}" alt="">
            </div>
        </div>
    </div>
    {{-- End information d'acceuil --}}


    {{-- information sur l'entreprise --}}
    <div class="container-fluid py-3 px-0">
        <div class="container company-struct py-5 px-0">
            <h2 class="text-center mb-5 pb-5">Vous représentez</h2>

            {{-- EntrepriseGroupement --}}
            <div class="card-struct">
                <div class="row p-0 m-0">
                    <div
                        class="d-none d-lg-block bg-light col-6 border border-5 border-end-0 border-bottom-0 p-0 rounded-3">
                        <svg class="bg-light" id="b582dbfc-ed60-4217-aa06-1e10ec960023" data-name="Layer 1"
                            xmlns="http://www.w3.org/2000/svg" width="90%" height="90%" viewBox="0 0 842 678.37637">
                            <title>Entreprise</title>
                            <ellipse cx="426" cy="645.87637" rx="416" ry="32.5" fill="#d4edff" />
                            <polygon points="779.369 585.5 783.268 614.093 755.975 616.692 759.874 581.601 779.369 585.5"
                                fill="#a0616a" />
                            <path
                                d="M829.70151,303.81246s2.59933,35.091,2.59933,36.39069S814.1055,431.1799,814.1055,431.1799s-25.99336,49.38737,0,48.0877,18.19534-46.788,18.19534-46.788l27.293-75.38072-11.697-53.28638Z"
                                transform="translate(-179 -110.81181)" fill="#a0616a" />
                            <polygon points="693.591 585.5 689.692 614.093 716.985 616.692 713.086 581.601 693.591 585.5"
                                fill="#a0616a" />
                            <path
                                d="M842.69819,428.58056l-6.49834,9.09768s-3.899,38.99,0,51.9867,11.697,72.7814,11.697,76.6804,1.29966,6.49834,0,7.798-5.19867,1.29967-2.59934,3.899,2.59934,10.39734,2.59934,10.39734V594.938l16.89568,96.17542s-10.39734,11.697-2.59934,11.697,36.3907,0,35.091-12.99667l-2.59933-1.29967s-3.899-85.77807-2.59934-89.67707,0-11.697,0-11.697-2.59934-3.899,0-5.19868,2.59934-11.697,2.59934-11.697l11.697-79.27974s10.39734,53.28638,16.89568,58.48505,5.19867,18.19535,5.19867,18.19535l5.19867,114.37076s-5.19867,12.99668,0,15.596,27.293,11.697,28.59269-1.29966,7.798-126.06777,7.798-131.26645-1.29966-7.798,0-11.697-1.29966-3.899,0-3.899-2.59933-3.899-2.59933-6.49834V479.2676s1.29967-12.99667,2.59933-15.596-1.29966-5.19867,0-9.09767-2.59933-16.89568-2.59933-16.89568l-58.485-15.596Z"
                                transform="translate(-179 -110.81181)" fill="#2f2e41" />
                            <path
                                d="M888.18656,719.70614s6.49834-6.49834-2.59934-6.49834a42.30349,42.30349,0,0,0-16.89568,3.899l-6.49834,23.394S835.55,761.94534,865.44237,759.346s25.34352-.64983,25.34352-.64983,9.09768-2.59934,10.39734-5.19867-2.59933-40.2897-2.59933-40.2897S894.6849,723.60514,888.18656,719.70614Z"
                                transform="translate(-179 -110.81181)" fill="#2f2e41" />
                            <path
                                d="M944.07227,719.70614s-6.49834-6.49834,2.59934-6.49834a42.30349,42.30349,0,0,1,16.89568,3.899l6.49833,23.394s26.64319,21.44452-3.24916,18.84518-29.24253-.64983-29.24253-.64983-9.09767-2.59934-10.39734-5.19867,6.49834-40.2897,6.49834-40.2897S937.57393,723.60514,944.07227,719.70614Z"
                                transform="translate(-179 -110.81181)" fill="#2f2e41" />
                            <circle cx="680.59387" cy="56.53553" r="33.79136" fill="#a0616a" />
                            <path
                                d="M847.89686,192.041s5.19867,25.99336,5.19867,29.89236,22.09435,15.596,22.09435,15.596l24.69369-31.192s-15.596-22.09435-15.596-27.293Z"
                                transform="translate(-179 -110.81181)" fill="#a0616a" />
                            <path
                                d="M867.39187,225.83239s-11.32759-3.015-14.76147-8.00583c0,0-35.92557,35.29886-35.92557,41.79719l28.59269,50.68705s0,18.19534,2.59934,19.495,0,0,0,5.19867-7.798,38.99-5.19867,44.18871,5.19867,1.29966,2.59933,9.09767-9.09767,49.38738-9.09767,49.38738,23.394-7.798,57.18538,5.19867,74.08106-5.19867,74.08106-5.19867-10.39734-23.394-7.798-31.192-6.49834-22.09435-6.49834-22.09435l-6.49833-119.56943s9.09767-53.28638,2.59933-55.88572L936.27426,203.738l-41.62054-5.11533S884.28755,224.53273,867.39187,225.83239Z"
                                transform="translate(-179 -110.81181)" fill="#d4edff" />
                            <path
                                d="M829.70151,250.52608l-12.99668,9.09767s-6.49834,19.495,0,28.59269,9.09768,22.09436,9.09768,22.09436l25.99335-2.59934Z"
                                transform="translate(-179 -110.81181)" fill="#d4edff" />
                            <path
                                d="M833.79434,131.63567l-5.86153-2.34663s12.25588-13.493,29.30768-12.31967l-4.79592-5.27995s11.72307-4.69318,22.38037,7.62649c5.60233,6.4762,12.0843,14.08861,16.12514,22.66391h6.2773l-2.61991,5.76875,9.16968,5.76874-9.41178-1.03622a31.921,31.921,0,0,1-.8902,14.94041l.25228,4.55962s-10.90958-16.87938-10.90958-19.226v5.86654s-5.86153-5.27986-5.86153-8.79977l-3.19718,4.10659-1.59858-6.45322-19.716,6.45322,3.19717-5.27986-12.25588,1.76,4.79592-6.45322s-13.85447,7.6265-14.38744,14.07972c-.53281,6.45313-7.46,14.6663-7.46,14.6663l-3.19717-5.86654S818.34129,140.43544,833.79434,131.63567Z"
                                transform="translate(-179 -110.81181)" fill="#2f2e41" />
                            <rect x="146.16914" y="282.832" width="516.46279" height="362.79825" fill="#f2f2f2" />
                            <rect x="189.64496" y="421.25614" width="129.67789" height="226.37411" fill="#3f3d56" />
                            <rect x="213.63162" y="434.83658" width="34.93166" height="32.56341" fill="#f2f2f2" />
                            <rect x="260.40453" y="434.83658" width="34.93166" height="32.56341" fill="#f2f2f2" />
                            <rect x="213.63162" y="479.24124" width="34.93166" height="33.74754" fill="#f2f2f2" />
                            <rect x="260.40453" y="479.24124" width="34.93166" height="33.74754" fill="#f2f2f2" />
                            <circle cx="302.83202" cy="549.6836" r="8.24541" fill="#157eb3" />
                            <rect x="362.79867" y="399.76697" width="256.35744" height="215.13036" fill="#3f3d56" />
                            <polygon
                                points="716.602 351.134 92.199 351.134 133.831 264.092 143.148 244.603 155.337 219.117 164.654 199.628 175.455 177.051 667.407 177.051 673.786 199.628 679.295 219.117 686.499 244.603 692.008 264.092 716.602 351.134"
                                fill="#3f3d56" />
                            <rect x="371.79367" y="488.96737" width="8.995" height="55.46915" fill="#157eb3" />
                            <rect x="371.79367" y="497.21278" width="8.995" height="6.74625" fill="#f2f2f2" />
                            <rect x="371.79367" y="529.44486" width="8.995" height="6.74625" fill="#f2f2f2" />
                            <rect x="385.28617" y="488.96737" width="21.73791" height="55.46915" fill="#157eb3" />
                            <rect x="385.28617" y="497.21278" width="21.73791" height="6.74625" fill="#f2f2f2" />
                            <rect x="385.28617" y="529.44486" width="21.73791" height="6.74625" fill="#f2f2f2" />
                            <rect x="412.27116" y="488.96737" width="8.995" height="55.46915" fill="#157eb3" />
                            <rect x="412.27116" y="497.21278" width="8.995" height="6.74625" fill="#f2f2f2" />
                            <rect x="412.27116" y="529.44486" width="8.995" height="6.74625" fill="#f2f2f2" />
                            <rect x="425.76366" y="488.96737" width="8.995" height="55.46915" fill="#157eb3" />
                            <rect x="425.76366" y="497.21278" width="8.995" height="6.74625" fill="#f2f2f2" />
                            <rect x="425.76366" y="529.44486" width="8.995" height="6.74625" fill="#f2f2f2" />
                            <rect x="623.50323" y="599.77918" width="8.995" height="55.46915"
                                transform="translate(-359.97652 151.03236) rotate(-20.65411)" fill="#157eb3" />
                            <rect x="617.8187" y="609.06043" width="8.995" height="6.74625"
                                transform="translate(-355.02271 148.05803) rotate(-20.65411)" fill="#f2f2f2" />
                            <rect x="629.18777" y="639.22084" width="8.995" height="6.74625"
                                transform="translate(-364.93033 154.0067) rotate(-20.65411)" fill="#f2f2f2" />
                            <rect x="589.17278" y="488.96737" width="21.73791" height="55.46915" fill="#157eb3" />
                            <rect x="589.17278" y="497.21278" width="21.73791" height="6.74625" fill="#f2f2f2" />
                            <rect x="589.17278" y="529.44486" width="21.73791" height="6.74625" fill="#f2f2f2" />
                            <rect x="574.9307" y="488.96737" width="8.995" height="55.46915" fill="#157eb3" />
                            <rect x="574.9307" y="497.21278" width="8.995" height="6.74625" fill="#f2f2f2" />
                            <rect x="574.9307" y="529.44486" width="8.995" height="6.74625" fill="#f2f2f2" />
                            <rect x="561.43821" y="488.96737" width="8.995" height="55.46915" fill="#157eb3" />
                            <rect x="561.43821" y="497.21278" width="8.995" height="6.74625" fill="#f2f2f2" />
                            <rect x="561.43821" y="529.44486" width="8.995" height="6.74625" fill="#f2f2f2" />
                            <rect x="698.46155" y="623.01626" width="55.46915" height="8.995"
                                transform="translate(-296.13324 974.88303) rotate(-69.34589)" fill="#157eb3" />
                            <rect x="728.50754" y="607.93605" width="6.74625" height="8.995"
                                transform="translate(-278.34283 970.44117) rotate(-69.34589)" fill="#f2f2f2" />
                            <rect x="717.13846" y="638.09647" width="6.74625" height="8.995"
                                transform="translate(-313.92365 979.32489) rotate(-69.34589)" fill="#f2f2f2" />
                            <rect x="362.79867" y="544.43652" width="256.35744" height="5.24708" fill="#f2f2f2" />
                            <rect x="474.48656" y="488.96737" width="47.22374" height="55.46915" fill="#157eb3" />
                            <rect x="486.1051" y="500.9607" width="23.98666" height="10.49416" fill="#f2f2f2" />
                            <rect x="488.72864" y="399.76697" width="4.4975" height="47.97332" fill="#f2f2f2" />
                            <circle cx="490.97739" cy="447.7403" r="7.49583" fill="#f2f2f2" />
                            <polygon
                                points="679.295 219.117 155.337 219.117 164.654 199.628 673.786 199.628 679.295 219.117"
                                fill="#157eb3" />
                            <polygon
                                points="692.008 264.092 133.831 264.092 143.148 244.603 686.499 244.603 692.008 264.092"
                                fill="#157eb3" />
                            <path
                                d="M925.87692,262.22309s-7.52619,19.353-5.95407,38.50094a20.29311,20.29311,0,0,0,3.35473,9.58676h0L831.07338,354.085s-41.66157,4.31346-31.26423,22.50881,48.08771-9.09767,48.08771-9.09767,98.77475-14.29635,106.57275-28.59269,12.99668-74.08106,12.99668-74.08106Z"
                                transform="translate(-179 -110.81181)" fill="#a0616a" />
                            <path
                                d="M929.77592,208.93671h19.495s14.29635,2.59934,18.19535,28.59269,7.798,32.4917,3.899,32.4917-50.687-1.29967-50.687-2.59934S929.77592,208.93671,929.77592,208.93671Z"
                                transform="translate(-179 -110.81181)" fill="#d4edff" />
                        </svg>
                    </div>
                    <div class="mx-auto col d-flex flex-column align-items-center justify-content-center message">
                        <img class=" d-lg-none" src="{{ asset('images/web/office.png') }}" alt="">
                        <h3 class="text-center mb-3">Une entreprise ou un groupement</h3>

                        <p class="my-3 px-3">
                            Vous souhaitez améliorer le niveau de compétences de vos collaborateurs pour rendre
                            votre entreprise « agile » face aux transitions ? Avec Lanea, le management par les
                            compétences n’a jamais été aussi simple et concret!
                        </p>

                        <div style="height:50px" class=" my-5 pb-5">
                            <a class="btn btn-default" href="">Découvrez LANEA</a>
                        </div>
                        <hr style="height:2px" class="d-lg-none bg-dark col-12">
                    </div>
                </div>
            </div>
            {{-- End EntrepriseGroupement --}}

            <!-- Accompagnement-->
            <div class="card-struct bisuness-struct">
                <div class="row p-0 m-0">
                    <div class="mx-auto col d-flex flex-column align-items-center justify-content-center message">
                        <img class=" d-lg-none" src="{{ asset('images/web/help.png') }}" alt="">
                        <h3 class="text-center mb-3">Une structure d'accompagnement de personnes en situation
                            de handicap</h3>

                        <p class="my-3 px-3">
                            Vous recherchez un outil pour faciliter le suivi du parcours professionnel et de
                            l’accompagnement de vos bénéficiaires au sein de votre ESAT , IMPRO ou ITEP? Wikikap est
                            fait pour vous.
                        </p>

                        <div style="height:50px" class=" my-5 pb-5">
                            <a class="btn btn-default" href="">Découvrez WIKIKAP</a>
                        </div>
                    </div>
                    <div class="d-none d-lg-block bg-light col-6 border border-5 border-start-0 border-top-0 p-0 rounded-3">
                        <svg id="b92250be-d9f5-40ed-a47f-f23be829550d" data-name="Layer 1"
                            xmlns="http://www.w3.org/2000/svg" width="90%" height="90%" viewBox="0 0 774.66988 700">
                            <title>collaborating</title>
                            <path
                                d="M838.13215,86.8817V735.08165a29.13911,29.13911,0,0,1-29.13,29.11005h-263.15a29.07908,29.07908,0,0,1-29.13-29.11V86.8817a29.12748,29.12748,0,0,1,29.13-29.13h39.38v5.05a23.987,23.987,0,0,0,23.98,23.99h133.84a23.78923,23.78923,0,0,0,14.22-4.68,22.28455,22.28455,0,0,0,2.36-1.98,23.917,23.917,0,0,0,7.4-17.33v-5.05h41.97A29.12108,29.12108,0,0,1,838.13215,86.8817Z"
                                transform="translate(-212.66506 -26.51128)" fill="#f2f2f2" />
                            <circle cx="472.20087" cy="436.42534" r="57" fill="#40a8f5" />
                            <path
                                d="M828.13405,802.51128H523.56374a36.05651,36.05651,0,0,1-19.37842-5.58008,32.54235,32.54235,0,0,1-15.33642-27.31347V59.4273c0-18.14991,15.57324-32.916,34.71484-32.916h71.57861V33.044c0,13.9419,12.002,25.28467,26.7544,25.28467H722.80349a27.48741,27.48741,0,0,0,15.88379-4.94629A25.17836,25.17836,0,0,0,749.55788,33.044V26.51128h78.57617c19.1416,0,34.71485,14.76611,34.71485,32.916V769.61773a32.15325,32.15325,0,0,1-12.22364,25.04589A35.77459,35.77459,0,0,1,828.13405,802.51128Zm-304.57031-774c-18.03906,0-32.71484,13.86914-32.71484,30.916V769.61773a30.54921,30.54921,0,0,0,14.41259,25.62792,34.05205,34.05205,0,0,0,18.30225,5.26563H828.13405a33.76747,33.76747,0,0,0,21.2334-7.40234,30.16509,30.16509,0,0,0,11.48145-23.49121V59.4273c0-17.04688-14.67578-30.916-32.71485-30.916H751.55788V33.044a27.17792,27.17792,0,0,1-11.73144,21.98194,29.46552,29.46552,0,0,1-17.023,5.30273H621.89675c-15.85547,0-28.7544-12.23974-28.7544-27.28467V28.51128Z"
                                transform="translate(-212.66506 -26.51128)" fill="#3f3d56" />
                            <path
                                d="M771.82013,558.29806H595.94329V368.93584H771.82013Zm-173.62194-2.2549h171.367V371.19075h-171.367Z"
                                transform="translate(-212.66506 -26.51128)" fill="#3f3d56" />
                            <rect x="405.3441" y="179.39848" width="115.46684" height="2.2549" fill="#3f3d56" />
                            <rect x="405.3441" y="210.09179" width="115.46684" height="2.2549" fill="#3f3d56" />
                            <rect x="405.3441" y="240.78511" width="115.46684" height="2.2549" fill="#3f3d56" />
                            <path
                                d="M284.22757,800.77817l-1.07324-.40234c-.23584-.08887-23.7085-9.082-34.7041-29.47363-10.99609-20.39258-5.61182-44.94531-5.55615-45.19043l.25341-1.11817,1.07276.40235c.23584.08886,23.708,9.082,34.7041,29.47363,10.99609,20.39258,5.61182,44.94531,5.55615,45.19043ZM250.211,769.953c9.29639,17.24121,27.84522,26.0791,32.54492,28.09668.89356-5.03711,3.6958-25.40625-5.59228-42.63086-9.28711-17.22266-27.84326-26.07422-32.54492-28.09668C243.72464,732.36216,240.92337,752.72935,250.211,769.953Z"
                                transform="translate(-212.66506 -26.51128)" fill="#3f3d56" />
                            <path
                                d="M256.85342,763.74915c19.76056,11.88861,27.371,35.50267,27.371,35.50267s-24.42779,4.33881-44.18835-7.5498-27.371-35.50267-27.371-35.50267S237.09285,751.86054,256.85342,763.74915Z"
                                transform="translate(-212.66506 -26.51128)" fill="#40a8f5" />
                            <polygon
                                points="707.75 772.239 709.582 802.455 719.654 813.443 740.714 797.877 726.979 766.745 707.75 772.239"
                                fill="#a0616a" />
                            <path
                                d="M945.13784,827.13508s.40709-6.10331,1.11919-17.702c0,0,30.9284-6.1048,29.09711,14.955s-17.39726,28.385-17.39726,28.385-7.32516-.91565-6.40952,6.40951-26.55371,22.89114-39.37275,8.24081l7.882-46.24009s8.59965,5.9517,11.34658,3.20476S945.13784,827.13508,945.13784,827.13508Z"
                                transform="translate(-212.66506 -26.51128)" fill="#40a8f5" />
                            <polygon
                                points="680.723 201.334 706.361 255.357 660.267 267.937 651.422 218.731 680.723 201.334"
                                fill="#a0616a" />
                            <circle cx="654.16905" cy="195.84005" r="35.71017" fill="#a0616a" />
                            <path
                                d="M890.21157,237.67325c-3.24259-.19348-6.40876.90236-9.62886,1.32987-11.52061,1.52952-23.50555-6.83038-26.0493-18.17028a13.94172,13.94172,0,0,0-1.33234-4.34106c-1.77307-2.89487-5.81115-3.44678-9.14-2.78112s-6.48421,2.22363-9.87426,2.4015c-5.2343.27464-10.25948-2.9478-13.049-7.38534s-3.57939-9.89791-3.2028-15.12586l2.50928,2.6336a12.74537,12.74537,0,0,0,1.13619-6.92692,8.03808,8.03808,0,0,1,7.61373,1.9482c2.21261.23548.54269-4.104,2.1865-5.60365.68832-.628,1.74363-.50948,2.67532-.5005,4.707.04538,8.5148-3.5549,12.22405-6.45314a51.94468,51.94468,0,0,1,21.939-10.00722c5.3152-1.03669,10.96717-1.20329,16.00787.77594,4.13966,1.62544,7.60461,4.58589,10.81035,7.66843,7.8917,7.58841,14.8799,16.50451,18.163,26.94883a45.366,45.366,0,0,1,.21728,26.30605c-1.32292,4.465-5.30985,19.75645-11.14661,20.11257C894.937,250.95062,899.34026,238.21793,890.21157,237.67325Z"
                                transform="translate(-212.66506 -26.51128)" fill="#2f2e41" />
                            <polygon
                                points="632.651 772.239 630.82 802.455 620.748 813.443 599.688 797.877 613.423 766.745 632.651 772.239"
                                fill="#a0616a" />
                            <path
                                d="M856.762,276.3744s4.57823-33.87888,48.5292-22.89113,48.52921,21.05984,48.52921,21.05984.91564,9.15645,3.66258,10.0721,10.0721,5.49387,6.40952,8.24081,16.48161,30.21629,16.48161,30.21629,11.90339,7.32517,4.57823,42.11969-15.566,85.155-15.566,85.155,2.74693,16.48161-.91565,25.63807,3.66258,15.566,3.66258,19.22855-1.83129,21.97549-1.83129,21.97549-124.52776-4.57823-141.925,0S856.762,276.3744,856.762,276.3744Z"
                                transform="translate(-212.66506 -26.51128)" fill="rgb(212, 237, 255)" />
                            <path
                                d="M966.18163,509.40614s7.32516,17.39726,0,45.78227-9.15645,99.80534-9.15645,99.80534,0,138.26245-6.40952,145.58761-4.57823,19.22855-4.57823,19.22855H918.56807s.91565-14.65032-2.74693-22.89113-2.74694-97.05841-2.74694-97.05841l-15.566-124.52776L866.37629,693.45086s-11.90339,87.90195-16.48162,91.56453,0,18.31291,0,18.31291a45.09751,45.09751,0,0,1-27.46936-4.57823V784.09975s-13.73468-5.49388-9.15645-25.63807,2.74693-238.98344,16.48161-249.05554S966.18163,509.40614,966.18163,509.40614Z"
                                transform="translate(-212.66506 -26.51128)" fill="#2f2e41" />
                            <path
                                d="M820.594,827.13508s-.40709-6.10331-1.11919-17.702c0,0-30.9284-6.1048-29.09711,14.955s17.39726,28.385,17.39726,28.385,7.32517-.91565,6.40952,6.40951,26.55372,22.89114,39.37275,8.24081l-7.882-46.24009s-8.59964,5.9517-11.34658,3.20476S820.594,827.13508,820.594,827.13508Z"
                                transform="translate(-212.66506 -26.51128)" fill="#40a8f5" />
                            <path
                                d="M808.23281,512.6109l-2.74694,12.819s-32.96323,52.19178-5.49387,57.68565,25.63807-50.36049,25.63807-50.36049l2.74693-11.90339Z"
                                transform="translate(-212.66506 -26.51128)" fill="#a0616a" />
                            <path
                                d="M840.73822,284.15739s19.22855-12.819,28.385,2.74693,18.31291,51.27614,18.31291,51.27614l-11.90339,86.98631-43.951,100.721-26.55371-10.0721s4.57823-12.819,2.74693-18.31291,7.32517-19.22855,7.32517-19.22855l9.15645-71.42034S827.91918,285.073,840.73822,284.15739Z"
                                transform="translate(-212.66506 -26.51128)" fill="rgb(212, 237, 255)" />
                            <polygon points="662.41 396.366 632.194 505.328 618.459 499.834 662.41 396.366" opacity="0.1" />
                            <path
                                d="M946.06605,309.05865a89.80885,89.80885,0,0,0,22.10156-2.66288l-.44888-1.775c-17.10128,4.32741-36.43893,3.26288-57.47463-3.16855-18.71618-5.72189-36.3969-14.88639-53.4955-23.74865l-.84232,1.62563c17.171,8.90026,34.92686,18.10366,53.8031,23.87473A124.66245,124.66245,0,0,0,946.06605,309.05865Z"
                                transform="translate(-212.66506 -26.51128)" opacity="0.1" />
                            <rect x="267.20087" y="501.42534" width="174" height="187" fill="#40a8f5" />
                            <polygon
                                points="500.201 436.878 471.748 436.878 471.748 408.425 470.654 408.425 470.654 436.878 442.201 436.878 442.201 437.973 470.654 437.973 470.654 466.425 471.748 466.425 471.748 437.973 500.201 437.973 500.201 436.878"
                                fill="#2f2e41" />
                            <rect x="296.3441" y="557.39848" width="115.46684" height="2.2549" fill="#f2f2f2" />
                            <rect x="296.3441" y="588.09179" width="115.46684" height="2.2549" fill="#f2f2f2" />
                            <rect x="296.3441" y="618.78511" width="115.46684" height="2.2549" fill="#f2f2f2" />
                        </svg>
                    </div>
                </div>
            </div>
            <!-- end Accompagnement-->
        </div>
    </div>
    {{-- iEnd nformation sur l'entreprise --}}

    {{-- Nos solution secteur handicap --}}
    <div class="container-fluid p-0">

        <div class="text-center container pb-5">
            <h3>Forts de notre expérience au sein du secteur du handicap, nous avons développé des solutions innovantes de
                gestion des compétences adaptées à chaque contexte.</h3>
        </div>
        <div class="d-flex align-items-center container-fluid presentation-card">
            <div class="container  hdp-resolution">
                <div class="row justify-content-around">
                    <div class="icons col-12 col-md-4 col-lg-3 mx-auto">
                        <span><i class="fas fa-user-check"></i></span>
                        <h3 class="mt-4">Une démarche GPEC* simple & opérationnelle</h3>
                        <p class="mt-3">Incluant des formations à la GPEC* et un accompagnement pour la réalisation de vos
                            fiches de fonction.</p>
                    </div>
                    <div class="icons col-12 col-md-4 col-lg-3 mx-auto">
                        <span><i class="fas fa-rocket"></i></span>
                        <h3 class="mt-4">Des applications évolutives</h3>
                        <p class="mt-3">3 évolutions majeures par an selon les demandes client et l’évolution de la
                            réglementation.</p>
                    </div>
                    <div class="icons col-12 col-md-4 col-lg-3 mx-auto">
                        <span><i class="fas fa-mobile-alt"></i></span>
                        <h3 class="mt-4">Optimisées pour tout support</h3>
                        <p class="mt-3">Faciles d’utilisation sur tablette, PC et smartphone, nos solutions en mode SaaS ne
                            nécessitent aucune installation.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- End Nos solution secteur handicap --}}

    {{-- PARTENAIRE --}}
    <div style="min-height:80vh" class="container-fluid py-5">
        <!--ECOSYSTEME-->
        <h2 class="mb-5">Notre écosystème</h2>
        <div class="mb-5 ecosytemes col-12 col-md-10 mx-auto d-flex flex-wrap align-items-center justify-content-around">
            <img src="https://sayaris.fr/wp-content/uploads/2020/03/french-tech.jpg" alt="sayaris">
            <img src="https://sayaris.fr/wp-content/uploads/2020/03/ess2-300x269-1.png" alt="sayaris">
            <img src="https://sayaris.fr/wp-content/uploads/2020/03/wp-content_uploads_2018_05_agrement_esus_karethic.jpg"
                alt="sayaris">
            <img src="https://sayaris.fr/wp-content/uploads/2020/03/frenchImpact-768x331.jpg" alt="sayaris">
        </div>
        <!--End ECOSYSTEME-->

        <!--Alliers-->
        <h2 class="mb-5">Ils nous soutiennent</h2>
        <div class="mb-5 allies col-12 mx-auto d-flex flex-wrap align-items-center justify-content-around">
            <img src="https://sayaris.fr/wp-content/uploads/2021/05/logo-NA.png" alt="sayaris">
            <img src="https://sayaris.fr/wp-content/uploads/2020/03/Fevrier-naissance-BPI-France-F-768x244.jpg"
                alt="sayaris">
            <img src="https://sayaris.fr/wp-content/uploads/2020/03/t%C3%A9l%C3%A9chargement.png" alt="sayaris">
            <img src="https://sayaris.fr/wp-content/uploads/2021/05/Logo-FA-768x223.png" alt="sayaris">
        </div>
        <!--End Alliers-->

        <!--Partenaire-->
        <h2 class="mb-5">Ils nous soutiennent</h2>
        <div class="partenaires col-12 mx-auto overflow-hidden">
            <picture class="d-flex">
                <img id="slid_partenaire" src="https://sayaris.fr/wp-content/uploads/2020/03/Digitalmax.jpg" alt="sayaris">
                <img id="slid_partenaire" src="https://sayaris.fr/wp-content/uploads/2020/03/Puls%C3%A9o-2.png"
                    alt="sayaris">
                <img id="slid_partenaire" src="https://sayaris.fr/wp-content/uploads/2020/03/AFBgroup-2.png" alt="sayaris">
                <img id="slid_partenaire" src="https://sayaris.fr/wp-content/uploads/2020/03/agipsah-2.png" alt="sayaris">

                <img id="slid_partenaire" src="https://sayaris.fr/wp-content/uploads/2020/03/agipsah-2.png" alt="sayaris">
                <img id="slid_partenaire" src="https://sayaris.fr/wp-content/uploads/2020/03/aia-2.png" alt="sayaris">
                <img id="slid_partenaire" src="https://sayaris.fr/wp-content/uploads/2020/03/Alephpa-2.png" alt="sayaris">
                <img id="slid_partenaire" src="https://sayaris.fr/wp-content/uploads/2020/03/altereos-2.jpg" alt="sayaris">
                <img id="slid_partenaire" src="https://sayaris.fr/wp-content/uploads/2020/03/ALTHEA-ESSONNE-LOGO-2.png"
                    alt="sayaris">
                <img id="slid_partenaire" src="https://sayaris.fr/wp-content/uploads/2020/03/amploi-2.png" alt="sayaris">
                <img id="slid_partenaire" src="https://sayaris.fr/wp-content/uploads/2020/03/ap90-2.png" alt="sayaris">
                <img id="slid_partenaire" src="https://sayaris.fr/wp-content/uploads/2020/03/argonne-production-2.jpg"
                    alt="sayaris">
                <img id="slid_partenaire" src="https://sayaris.fr/wp-content/uploads/2020/03/ascalon-2.jpg" alt="sayaris">
                <img id="slid_partenaire"
                    src="https://sayaris.fr/wp-content/uploads/2020/03/atelier_protege_seneve_04900700_142228286-2.png"
                    alt="sayaris">
                <img id="slid_partenaire" src="https://sayaris.fr/wp-content/uploads/2020/03/atimic-2.png" alt="sayaris">
                <img id="slid_partenaire" src="https://sayaris.fr/wp-content/uploads/2020/03/casem_logo-2.png"
                    alt="sayaris">
                <img id="slid_partenaire" src="https://sayaris.fr/wp-content/uploads/2020/03/deastance-2.png" alt="sayaris">
                <img id="slid_partenaire" src="https://sayaris.fr/wp-content/uploads/2020/03/divercity-2.png" alt="sayaris">
                <img id="slid_partenaire" src="https://sayaris.fr/wp-content/uploads/2020/03/epas-65-2.png" alt="sayaris">
                <img id="slid_partenaire" src="https://sayaris.fr/wp-content/uploads/2020/03/gaia-2.png" alt="sayaris">
                <img id="slid_partenaire" src="https://sayaris.fr/wp-content/uploads/2020/03/ino-2.png" alt="sayaris">
                <img id="slid_partenaire" src="https://sayaris.fr/wp-content/uploads/2020/03/iris-2.png" alt="sayaris">
                <img id="slid_partenaire" src="https://sayaris.fr/wp-content/uploads/2020/03/LOGO-ORANGERIE-2.jpg"
                    alt="sayaris">
                <img id="slid_partenaire" src="https://sayaris.fr/wp-content/uploads/2020/03/logo_adapei_ast-2.png"
                    alt="sayaris">
                <img id="slid_partenaire" src="https://sayaris.fr/wp-content/uploads/2020/03/logo_altereos-2.jpg"
                    alt="sayaris">
                <img id="slid_partenaire" src="https://sayaris.fr/wp-content/uploads/2020/03/logo_at_rouergue-2.png"
                    alt="sayaris">
                <img id="slid_partenaire" src="https://sayaris.fr/wp-content/uploads/2020/03/logo_cedre-2.png"
                    alt="sayaris">
                <img id="slid_partenaire" src="https://sayaris.fr/wp-content/uploads/2020/03/logo_divertcity-2.png"
                    alt="sayaris">
                <img id="slid_partenaire" src="https://sayaris.fr/wp-content/uploads/2020/03/logo_handea-2.png"
                    alt="sayaris">
                <img id="slid_partenaire" src="https://sayaris.fr/wp-content/uploads/2020/03/logo_iris_400_400-2.jpg"
                    alt="sayaris">
                <img id="slid_partenaire"
                    src="https://sayaris.fr/wp-content/uploads/2020/03/Logo_Les_Jardins_de_Non%C3%A8res-2.png"
                    alt="sayaris">
                <img id="slid_partenaire" src="https://sayaris.fr/wp-content/uploads/2020/03/logo_MANUFACTURE_DOC-01-2.jpg"
                    alt="sayaris">
                <img id="slid_partenaire" src="https://sayaris.fr/wp-content/uploads/2020/03/logo_nouelles-2.png"
                    alt="sayaris">
                <img id="slid_partenaire" src="https://sayaris.fr/wp-content/uploads/2020/03/logo_recyclea-2.png"
                    alt="sayaris">
                <img id="slid_partenaire" src="https://sayaris.fr/wp-content/uploads/2020/03/logo_saprena-2.jpg"
                    alt="sayaris">
                <img id="slid_partenaire" src="https://sayaris.fr/wp-content/uploads/2020/03/logo_sefard-2.png"
                    alt="sayaris">
                <img id="slid_partenaire" src="https://sayaris.fr/wp-content/uploads/2020/03/logo_sts-2.png" alt="sayaris">
                <img id="slid_partenaire" src="https://sayaris.fr/wp-content/uploads/2020/03/logo_tpc-2.png" alt="sayaris">
                <img id="slid_partenaire" src="https://sayaris.fr/wp-content/uploads/2020/03/logo_vauban_envir-2.png"
                    alt="sayaris">
                <img id="slid_partenaire"
                    src="https://sayaris.fr/wp-content/uploads/2020/03/logo-APF-entreprises201811-2.jpg" alt="sayaris">
                <img id="slid_partenaire" src="https://sayaris.fr/wp-content/uploads/2020/03/logo-bgc31-2.jpg"
                    alt="sayaris">
                <img id="slid_partenaire"
                    src="https://sayaris.fr/wp-content/uploads/2020/03/logo-foyer-esperance-2-2048x2048.png" alt="sayaris">
                <img id="slid_partenaire" src="https://sayaris.fr/wp-content/uploads/2020/03/Sauvy-2.png" alt="sayaris">
                <img id="slid_partenaire" src="https://sayaris.fr/wp-content/uploads/2020/03/unnamed-2.jpg" alt="sayaris">
                <img id="slid_partenaire" src="https://sayaris.fr/wp-content/uploads/2020/03/logo_cosavoir2.png"
                    alt="sayaris">
                <img id="slid_partenaire" src="https://sayaris.fr/wp-content/uploads/2020/03/124959logo-adiaph-2.jpg"
                    alt="sayaris">
                <img id="slid_partenaire" src="https://sayaris.fr/wp-content/uploads/2020/03/ACVO-2.jpg" alt="sayaris">
                <img id="slid_partenaire" src="https://sayaris.fr/wp-content/uploads/2020/03/Coffignal-2.jpg" alt="sayaris">
            </picture>

        </div>
        <!--End Alliers-->
    </div>
    {{-- End PARTENAIRE --}}
@endsection
