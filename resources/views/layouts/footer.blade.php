<!-- Footer Start-->
<footer class="footer mt-auto">
    <div class="footer-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="footer-content">
                        <h4>Atalhos</h4>
                        <ul class="footer-link-list">
                            <li><a href="{{route('help_center')}}" class="footer-link">Centro de Ajuda</a></li>
                            <li><a href="{{route('faq')}}" class="footer-link">Perguntas Frequentes</a></li>
                            <li><a href="{{route('contact_us')}}" class="footer-link">Contacte-nos</a></li>
                        </ul>
                    </div>
                </div>
                
                <div class="col-lg-3 col-md-6">
                    <div class="footer-content">
                        <h4>Siga-nos</h4>
                        <ul class="social-links">
                            <li><a href="#" class="social-link"><i class="fab fa-facebook-square"></i></a>
                            <li><a href="#" class="social-link"><i class="fab fa-instagram"></i></a>
                            <li><a href="#" class="social-link"><i class="fab fa-twitter"></i></a>
                            <li><a href="#" class="social-link"><i class="fab fa-linkedin-in"></i></a>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="footer-copyright-text">
                        <p class="mb-0">©{{date('Y')}}, <strong>{{env('APP_NAME')}}</strong>. Todos direitos reservados. powered by VIBRATIX</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- Footer End-->