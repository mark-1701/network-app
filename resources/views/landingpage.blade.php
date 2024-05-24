<!DOCTYPE html>
<html lang="en" data-theme="light">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Network App</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@1.0.0/css/bulma.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>

<body>
    <nav class="nav">
        <img src="{{asset('img/logo.png')}}" alt="" class="logo">
        <a class="button is-primary" href="{{route('user.index')}}">Iniciar Sistema</a>
    </nav>
    <section class="banner">
        <div class="banner-message">connect-e Solutions es una empresa líder en la instalación de redes de computadoras, especializada en proporcionar soluciones completas y personalizadas para sus clientes. Nos dedicamos a la implementación de redes de alta calidad, diseñadas para satisfacer las necesidades específicas de cada negocio</div>
        <div class="banner-image"><img src="{{ asset('img/wallpaper_1.webp') }}" alt=""></div>
    </section>
    <section class="section mt-5">
        <h2 class="title is-4">Nuestros Productos</h2>
        <div class="targets">
            <div class="target">
                <div class="target-image">
                    <img src="{{ asset('img/router.jpg') }}" alt="Placeholder image" />
                </div>
                <div class="target-footer">
                    <p class="subtitle">Router</p>
                </div>
            </div>
            <div class="target">
                <div class="target-image">
                    <img src="{{ asset('img/firewall.webp') }}" alt="Placeholder image" />
                </div>
                <div class="target-footer">
                    <p class="subtitle">Firewall</p>
                </div>
            </div>
            <div class="target">
                <div class="target-image">
                    <img src="{{ asset('img/servidor.avif') }}" alt="Placeholder image" />
                </div>
                <div class="target-footer">
                    <p class="subtitle">Servidor</p>
                </div>
            </div>
            <div class="target">
                <div class="target-image">
                    <img src="{{ asset('img/switch.jpg') }}" alt="Placeholder image" />
                </div>
                <div class="target-footer">
                    <p class="subtitle">Switch</p>
                </div>
            </div>
        </div>
    </section>
    <section class="banner">
        <div class="banner-image"><img src="{{ asset('img/wallpaper_2.webp') }}" alt=""></div>
        <div class="banner-message">Utilizamos dispositivos de última generación, como routers, switches y servidores, para asegurar la máxima eficiencia y seguridad en sus comunicaciones. Además, ofrecemos servicios de configuración y mantenimiento de impresoras y otros dispositivos de red esenciales para el funcionamiento diario de su empresa.
        </div>
    </section>
    <section class="section mt-5">
        <h2 class="title is-4">Beneficios</h2>
        <div class="targets benefits">
            <div class="target benefit">
                <div><span class="material-symbols-outlined">schedule</span></div>
                <p class="subtitle">A tiempo</p>
                <p class="subtitle is-6">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolor incidunt, odit perspiciatis molestiae, expedita veniam, corrupti temporibus sunt animi at laudantium blanditiis. Non sapiente esse ab qui nam dignissimos officia!</p>
            </div>
            <div class="target benefit">
                <div><span class="material-symbols-outlined">security</span></div>
                <p class="subtitle">Router</p>
                <p class="subtitle is-6">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolor incidunt, odit perspiciatis molestiae, expedita veniam, corrupti temporibus sunt animi at laudantium blanditiis. Non sapiente esse ab qui nam dignissimos officia!</p>
            </div>
            <div class="target benefit">
                <div><span class="material-symbols-outlined">support_agent</span></div>
                <p class="subtitle">Router</p>
                <p class="subtitle is-6">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolor incidunt, odit perspiciatis molestiae, expedita veniam, corrupti temporibus sunt animi at laudantium blanditiis. Non sapiente esse ab qui nam dignissimos officia!</p>
            </div>
            <div class="target benefit">
                <div><span class="material-symbols-outlined">lan</span></div>
                <p class="subtitle">Router</p>
                <p class="subtitle is-6">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolor incidunt, odit perspiciatis molestiae, expedita veniam, corrupti temporibus sunt animi at laudantium blanditiis. Non sapiente esse ab qui nam dignissimos officia!</p>
            </div>
        </div>
    </section>
    <section class="form-container section mb-5">
        <div class="form-container-image"><img src="{{ asset('img/wallpaper_3.png') }}" alt=""></div>
        <div class="form-container-message">
            <p class="title is-4 text-center">Formulario</p>
            <div class="field">
                <label class="label">Name</label>
                <div class="control">
                  <input class="input" type="text" placeholder="Text input">
                </div>
              </div>
              
              <div class="field">
                <label class="label">Username</label>
                <div class="control has-icons-left has-icons-right">
                  <input class="input is-success" type="text" placeholder="Text input" value="bulma">
                  <span class="icon is-small is-left">
                    <i class="fas fa-user"></i>
                  </span>
                  <span class="icon is-small is-right">
                    <i class="fas fa-check"></i>
                  </span>
                </div>
                <p class="help is-success">This username is available</p>
              </div>
              
              <div class="field">
                <label class="label">Email</label>
                <div class="control has-icons-left has-icons-right">
                  <input class="input is-danger" type="email" placeholder="Email input" value="hello@">
                  <span class="icon is-small is-left">
                    <i class="fas fa-envelope"></i>
                  </span>
                  <span class="icon is-small is-right">
                    <i class="fas fa-exclamation-triangle"></i>
                  </span>
                </div>
                <p class="help is-danger">This email is invalid</p>
              </div>
              
              <div class="field">
                <label class="label">Subject</label>
                <div class="control">
                  <div class="select">
                    <select>
                      <option>Select dropdown</option>
                      <option>With options</option>
                    </select>
                  </div>
                </div>
              </div>
              
              <div class="field">
                <label class="label">Message</label>
                <div class="control">
                  <textarea class="textarea" placeholder="Textarea"></textarea>
                </div>
              </div>
              
              <div class="field">
                <div class="control">
                  <label class="checkbox">
                    <input type="checkbox">
                    I agree to the <a href="#">terms and conditions</a>
                  </label>
                </div>
              </div>
              
              <div class="field">
                <div class="control">
                  <label class="radio">
                    <input type="radio" name="question">
                    Yes
                  </label>
                  <label class="radio">
                    <input type="radio" name="question">
                    No
                  </label>
                </div>
              </div>
              
              <div class="field is-grouped">
                <div class="control">
                  <button class="button is-link">Submit</button>
                </div>
                <div class="control">
                  <button class="button is-link is-light">Cancel</button>
                </div>
              </div>
        </div>
    </section>
    <section class="section footer">
        <p class="text-center">Términos de uso | Promociones | Acerca de | Cookies</p>
        <p class="text-center">© 2023 Derechos reservados Snorlax Systems</p>
    </section>

</body>

</html>