<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MCQ Test</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .question-page {
            display: none;
        }

        .question-page.active {
            display: block;
        }

        .pagination .active .page-link {
            background-color: #007bff;
            color: white;
        }

        .checkbox-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 10px;
        }

        .container {
            max-width: 430px;

            height: 100%;
            display: flex;
            flex-direction: column;
            justify-content: space-between;

            padding: 20px;
        }
    </style>
</head>

<body>
    <div class="container mt-5">
        <div class="d-flex justify-content-between align-items-center">
            <div>
                <h2>Geography</h2>
                <h4>Chapter 1</h4>
            </div>
            <div>
                <p>Time Left: <span id="time">10:00</span></p>
            </div>
        </div>
        <div class="form-group">
            <label for="language-selector">Select Language(s):</label>
            <div id="language-selector" class="checkbox-grid">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="english" value="en" checked>
                    <label class="form-check-label" for="english">English</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="spanish" value="es">
                    <label class="form-check-label" for="spanish">Spanish</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="french" value="fr">
                    <label class="form-check-label" for="french">French</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="german" value="de">
                    <label class="form-check-label" for="german">German</label>
                </div>
            </div>
            <small class="form-text text-muted">You can select up to two languages.</small>
        </div>

        <form id="examForm">
            <!-- Question Pages -->
            <div class="question-page active" data-page="1">
                <div class="form-group">
                    <label for="question1" data-en="1. What is the capital of France?"
                        data-es="1. ¿Cuál es la capital de Francia?" data-fr="1. Quelle est la capitale de la France?"
                        data-de="1. Was ist die Hauptstadt von Frankreich?">1. What is the capital of France?</label>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="question1" id="question1a" value="a">
                        <label class="form-check-label" for="question1a" data-en="Paris" data-es="París" data-fr="Paris"
                            data-de="Paris">Paris</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="question1" id="question1b" value="b">
                        <label class="form-check-label" for="question1b" data-en="Madrid" data-es="Madrid"
                            data-fr="Madrid" data-de="Madrid">Madrid</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="question1" id="question1c" value="c">
                        <label class="form-check-label" for="question1c" data-en="Rome" data-es="Roma" data-fr="Rome"
                            data-de="Rom">Rome</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="question1" id="question1d" value="d">
                        <label class="form-check-label" for="question1d" data-en="Berlin" data-es="Berlín"
                            data-fr="Berlin" data-de="Berlin">Berlin</label>
                    </div>
                </div>
            </div>
            <div class="question-page active" data-page="2">
                <div class="form-group">
                    <label for="question2"
                        data-en="2. Which of the following novels, written by George Orwell, offers a profound and bleak depiction of a dystopian future under an omnipresent totalitarian regime, highlighting themes of surveillance, propaganda, and the loss of individual freedoms?"
                        data-es="2. ¿Cuál de las siguientes novelas, escrita por George Orwell, ofrece una descripción profunda y sombría de un futuro distópico bajo un régimen totalitario omnipresente, destacando temas como la vigilancia, la propaganda y la pérdida de libertades individuales?"
                        data-fr="2. Lequel des romans suivants, écrit par George Orwell, offre une représentation profonde et sombre d'un avenir dystopique sous un régime totalitaire omniprésent, soulignant les thèmes de la surveillance, de la propagande et de la perte des libertés individuelles?"
                        data-de="2. Welcher der folgenden Romane, geschrieben von George Orwell, bietet eine tiefe und düstere Darstellung einer dystopischen Zukunft unter einem allgegenwärtigen totalitären Regime und hebt Themen wie Überwachung, Propaganda und den Verlust individueller Freiheiten hervor?">2.
                        Which of the following novels, written by George Orwell, offers a profound and bleak depiction
                        of a dystopian future under an omnipresent totalitarian regime, highlighting themes of
                        surveillance, propaganda, and the loss of individual freedoms?</label>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="question2" id="question2a"
                            value="a">
                        <label class="form-check-label" for="question2a"
                            data-en="1984 - A chilling portrayal of a totalitarian society where the government, known as 'Big Brother', exerts total control over every aspect of life through constant surveillance and manipulation of truth."
                            data-es="1984 - Una representación escalofriante de una sociedad totalitaria donde el gobierno, conocido como 'Gran Hermano', ejerce un control total sobre cada aspecto de la vida a través de la vigilancia constante y la manipulación de la verdad."
                            data-fr="1984 - Une représentation glaçante d'une société totalitaire où le gouvernement, connu sous le nom de 'Big Brother', exerce un contrôle total sur tous les aspects de la vie grâce à une surveillance constante et à la manipulation de la vérité."
                            data-de="1984 - Eine erschreckende Darstellung einer totalitären Gesellschaft, in der die Regierung, bekannt als 'Big Brother', jeden Aspekt des Lebens durch ständige Überwachung und Manipulation der Wahrheit kontrolliert.">1984
                            - A chilling portrayal of a totalitarian society where the government, known as 'Big
                            Brother', exerts total control over every aspect of life through constant surveillance and
                            manipulation of truth.</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="question2" id="question2b"
                            value="b">
                        <label class="form-check-label" for="question2b"
                            data-en="Animal Farm - An allegorical novella that uses a group of farm animals to depict the rise of Soviet communism, focusing on the corruption of revolutionary ideals and the nature of power."
                            data-es="Rebelión en la granja - Una novela alegórica que utiliza un grupo de animales de granja para representar el auge del comunismo soviético, centrándose en la corrupción de los ideales revolucionarios y la naturaleza del poder."
                            data-fr="La Ferme des animaux - Un roman allégorique qui utilise un groupe d'animaux de ferme pour dépeindre la montée du communisme soviétique, en se concentrant sur la corruption des idéaux révolutionnaires et la nature du pouvoir."
                            data-de="Farm der Tiere - Eine allegorische Novelle, die eine Gruppe von Nutztieren verwendet, um den Aufstieg des sowjetischen Kommunismus darzustellen und sich auf die Korruption revolutionärer Ideale und die Natur der Macht konzentriert.">Animal
                            Farm - An allegorical novella that uses a group of farm animals to depict the rise of Soviet
                            communism, focusing on the corruption of revolutionary ideals and the nature of
                            power.</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="question2" id="question2c"
                            value="c">
                        <label class="form-check-label" for="question2c"
                            data-en="Brave New World - A dystopian novel by Aldous Huxley that explores a future society driven by technological advancements and consumerism, where human beings are conditioned from birth for their roles in society."
                            data-es="Un mundo feliz - Una novela distópica de Aldous Huxley que explora una sociedad futura impulsada por los avances tecnológicos y el consumismo, donde los seres humanos son condicionados desde el nacimiento para sus roles en la sociedad."
                            data-fr="Le Meilleur des mondes - Un roman dystopique d'Aldous Huxley qui explore une société future guidée par les avancées technologiques et le consumérisme, où les êtres humains sont conditionnés dès la naissance pour leurs rôles dans la société."
                            data-de="Schöne neue Welt - Ein dystopischer Roman von Aldous Huxley, der eine zukünftige Gesellschaft erforscht, die durch technologische Fortschritte und Konsumismus angetrieben wird, in der Menschen von Geburt an auf ihre Rollen in der Gesellschaft konditioniert werden.">Brave
                            New World - A dystopian novel by Aldous Huxley that explores a future society driven by
                            technological advancements and consumerism, where human beings are conditioned from birth
                            for their roles in society.</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="question2" id="question2d"
                            value="d">
                        <label class="form-check-label" for="question2d"
                            data-en="Fahrenheit 451 - A dystopian novel by Ray Bradbury that presents a future society where books are banned and 'firemen' burn any that are found, exploring themes of censorship and the impact of technology on society."
                            data-es="Fahrenheit 451 - Una novela distópica de Ray Bradbury que presenta una sociedad futura donde los libros están prohibidos y los 'bomberos' queman cualquiera que se encuentre, explorando temas de censura y el impacto de la tecnología en la sociedad."
                            data-fr="Fahrenheit 451 - Un roman dystopique de Ray Bradbury qui présente une société future où les livres sont interdits et où les 'pompiers' brûlent ceux qui sont trouvés,société."
                            data-de="Schöne neue Welt - Ein dystopischer Roman von Aldous Huxley, der eine zukünftige Gesellschaft erforscht, die durch technologische Fortschritte und Konsumismus angetrieben wird, in der Menschen von Geburt an auf ihre Rollen in der Gesellschaft konditioniert werden.">Fahrenheit
                            451 - A dystopian novel by Ray Bradbury that presents a future society where books are
                            banned and 'firemen' burn any that are found, exploring themes of censorship and the impact
                            of technology on society</label>
                    </div>
                </div>
            </div>
            {{-- <div class="question-page active" data-page="2">
                <div class="form-group">
                    <label for="question2"
                        data-en="2. Which of the following novels, written by George Orwell, depicts a dystopian future under a totalitarian regime?"
                        data-es="2. ¿Cuál de las siguientes novelas, escrita por George Orwell, describe un futuro distópico bajo un régimen totalitario?"
                        data-fr="2. Lequel des romans suivants, écrit par George Orwell, décrit un avenir dystopique sous un régime totalitaire?"
                        data-de="2. Welcher der folgenden Romane, geschrieben von George Orwell, beschreibt eine dystopische Zukunft unter einem totalitären Regime?">2.
                        Which of the following novels, written by George Orwell, depicts a dystopian future under a
                        totalitarian regime?</label>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="question2" id="question2a"
                            value="a">
                        <label class="form-check-label" for="question2a" data-en="1984" data-es="1984"
                            data-fr="1984" data-de="1984">1984</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="question2" id="question2b"
                            value="b">
                        <label class="form-check-label" for="question2b" data-en="Animal Farm"
                            data-es="Rebelión en la granja" data-fr="La Ferme des animaux"
                            data-de="Farm der Tiere">Animal Farm</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="question2" id="question2c"
                            value="c">
                        <label class="form-check-label" for="question2c" data-en="Brave New World"
                            data-es="Un mundo feliz" data-fr="Le Meilleur des mondes"
                            data-de="Schöne neue Welt">Brave New World</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="question2" id="question2d"
                            value="d">
                        <label class="form-check-label" for="question2d" data-en="Fahrenheit 451"
                            data-es="Fahrenheit 451" data-fr="Fahrenheit 451" data-de="Fahrenheit 451">Fahrenheit
                            451</label>
                    </div>
                </div>
            </div> --}}
            {{-- 
            <div class="question-page" data-page="2">
                <div class="form-group">
                    <label for="question2" data-en="2. Which country is known as the Land of the Rising Sun?"
                        data-es="2. ¿Qué país es conocido como la Tierra del Sol Naciente?"
                        data-fr="2. Quel pays est connu sous le nom de Pays du Soleil Levant?"
                        data-de="2. Welches Land ist als das Land der aufgehenden Sonne bekannt?">2. Which country is
                        known as the Land of the Rising Sun?</label>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="question2" id="question2a"
                            value="a">
                        <label class="form-check-label" for="question2a" data-en="China" data-es="China"
                            data-fr="Chine" data-de="China">China</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="question2" id="question2b"
                            value="b">
                        <label class="form-check-label" for="question2b" data-en="Japan" data-es="Japón"
                            data-fr="Japon" data-de="Japan">Japan</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="question2" id="question2c"
                            value="c">
                        <label class="form-check-label" for="question2c" data-en="Thailand" data-es="Tailandia"
                            data-fr="Thaïlande" data-de="Thailand">Thailand</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="question2" id="question2d"
                            value="d">
                        <label class="form-check-label" for="question2d" data-en="South Korea"
                            data-es="Corea del Sur" data-fr="Corée du Sud" data-de="Südkorea">South Korea</label>
                    </div>
                </div>
            </div> --}}

            <div class="question-page" data-page="3">
                <div class="form-group">
                    <label for="question3" data-en="3. Which is the longest river in the world?"
                        data-es="3. ¿Cuál es el río más largo del mundo?"
                        data-fr="3. Quel est le plus long fleuve du monde?"
                        data-de="3. Welches ist der längste Fluss der Welt?">3. Which is the longest river in
                        the
                        world?</label>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="question3" id="question3a"
                            value="a">
                        <label class="form-check-label" for="question3a" data-en="Nile" data-es="Nilo"
                            data-fr="Nil" data-de="Nil">Nile</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="question3" id="question3b"
                            value="b">
                        <label class="form-check-label" for="question3b" data-en="Amazon" data-es="Amazonas"
                            data-fr="Amazone" data-de="Amazonas">Amazon</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="question3" id="question3c"
                            value="c">
                        <label class="form-check-label" for="question3c" data-en="Yangtze" data-es="Yangtsé"
                            data-fr="Yangtsé" data-de="Yangtse">Yangtze</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="question3" id="question3d"
                            value="d">
                        <label class="form-check-label" for="question3d" data-en="Mississippi" data-es="Misisipi"
                            data-fr="Mississippi" data-de="Mississippi">Mississippi</label>
                    </div>
                </div>
            </div>

            <div class="question-page" data-page="4">
                <div class="form-group">
                    <label for="question4" data-en="4. Which desert is the largest in the world?"
                        data-es="4. ¿Cuál es el desierto más grande del mundo?"
                        data-fr="4. Quel est le plus grand désert du monde?"
                        data-de="4. Welches ist die größte Wüste der Welt?">4. Which desert is the largest in
                        the
                        world?</label>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="question4" id="question4a"
                            value="a">
                        <label class="form-check-label" for="question4a" data-en="Sahara" data-es="Sahara"
                            data-fr="Sahara" data-de="Sahara">Sahara</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="question4" id="question4b"
                            value="b">
                        <label class="form-check-label" for="question4b" data-en="Gobi" data-es="Gobi"
                            data-fr="Gobi" data-de="Gobi">Gobi</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="question4" id="question4c"
                            value="c">
                        <label class="form-check-label" for="question4c" data-en="Kalahari" data-es="Kalahari"
                            data-fr="Kalahari" data-de="Kalahari">Kalahari</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="question4" id="question4d"
                            value="d">
                        <label class="form-check-label" for="question4d" data-en="Antarctic" data-es="Antártico"
                            data-fr="Antarctique" data-de="Antarktis">Antarctic</label>
                    </div>
                </div>
            </div>

            <div class="question-page" data-page="5">
                <div class="form-group">
                    <label for="question5" data-en="5. Which is the smallest country in the world?"
                        data-es="5. ¿Cuál es el país más pequeño del mundo?"
                        data-fr="5. Quel est le plus petit pays du monde?"
                        data-de="5. Welches ist das kleinste Land der Welt?">5. Which is the smallest country
                        in the
                        world?</label>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="question5" id="question5a"
                            value="a">
                        <label class="form-check-label" for="question5a" data-en="Vatican City"
                            data-es="Ciudad del Vaticano" data-fr="Cité du Vatican" data-de="Vatikanstadt">Vatican
                            City</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="question5" id="question5b"
                            value="b">
                        <label class="form-check-label" for="question5b" data-en="Monaco" data-es="Mónaco"
                            data-fr="Monaco" data-de="Monaco">Monaco</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="question5" id="question5c"
                            value="c">
                        <label class="form-check-label" for="question5c" data-en="Nauru" data-es="Nauru"
                            data-fr="Nauru" data-de="Nauru">Nauru</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="question5" id="question5d"
                            value="d">
                        <label class="form-check-label" for="question5d" data-en="San Marino" data-es="San Marino"
                            data-fr="Saint-Marin" data-de="San Marino">San
                            Marino</label>
                    </div>
                </div>
            </div>

            <!-- Navigation Buttons -->
            <div class="d-flex justify-content-between">
                <button type="button" class="btn btn-secondary prev-btn">Previous</button>
                <button type="button" class="btn btn-primary next-btn">Next</button>
            </div>
        </form>

        <!-- Pagination -->
        <div class="mt-3">
            <nav>
                <ul class="pagination">
                    <!-- Add list items for each page -->
                    <li class="page-item active"><span class="page-link" data-page="1">1</span></li>
                    <li class="page-item"><span class="page-link" data-page="2">2</span></li>
                    <li class="page-item"><span class="page-link" data-page="3">3</span></li>
                    <li class="page-item"><span class="page-link" data-page="4">4</span></li>
                    <li class="page-item"><span class="page-link" data-page="5">5</span></li>
                </ul>
            </nav>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            let currentPage = 1;
            const totalPages = document.querySelectorAll('.question-page').length;

            function showPage(page) {
                document.querySelectorAll('.question-page').forEach((pageElement, index) => {
                    pageElement.classList.toggle('active', index + 1 === page);
                });
                document.querySelectorAll('.pagination .page-item').forEach((pageItem, index) => {
                    pageItem.classList.toggle('active', index + 1 === page);
                });
            }

            document.querySelectorAll('.next-btn').forEach(button => {
                button.addEventListener('click', () => {
                    if (currentPage < totalPages) {
                        currentPage++;
                        showPage(currentPage);
                    }
                });
            });

            document.querySelectorAll('.prev-btn').forEach(button => {
                button.addEventListener('click', () => {
                    if (currentPage > 1) {
                        currentPage--;
                        showPage(currentPage);
                    }
                });
            });

            document.querySelectorAll('.page-link').forEach(link => {
                link.addEventListener('click', (event) => {
                    currentPage = parseInt(event.target.getAttribute('data-page'));
                    showPage(currentPage);
                });
            });

            showPage(currentPage);

            let timeLeft = 600; // Time in seconds (10 minutes)
            const timerElement = document.getElementById('time');

            function updateTimer() {
                let minutes = Math.floor(timeLeft / 60);
                let seconds = timeLeft % 60;
                timerElement.textContent = `${minutes}:${seconds < 10 ? '0' : ''}${seconds}`;
                if (timeLeft > 0) {
                    timeLeft--;
                    setTimeout(updateTimer, 1000);
                } else {
                    // Time's up logic
                    alert('Time is up!');
                    document.getElementById('examForm').submit();
                }
            }
            updateTimer();

            // Language selector logic
            const languageSelector = document.getElementById('language-selector');
            let selectedLanguages = Array.from(languageSelector.querySelectorAll('input:checked')).map(input =>
                input.value);

            languageSelector.addEventListener('change', (event) => {
                const selectedOptions = Array.from(languageSelector.querySelectorAll('input:checked'));
                if (selectedOptions.length > 2) {
                    event.target.checked = false;
                    alert('You can select up to two languages only.');
                }

                selectedLanguages = Array.from(languageSelector.querySelectorAll('input:checked')).map(
                    input => input.value);
                updateContentLanguage(selectedLanguages);
            });

            function updateContentLanguage(languages) {
                document.querySelectorAll('.question-page').forEach(page => {
                    page.querySelectorAll('label, .form-check-label').forEach(label => {
                        const textContent = {
                            en: label.getAttribute('data-en'),
                            es: label.getAttribute('data-es'),
                            fr: label.getAttribute('data-fr'),
                            de: label.getAttribute('data-de')
                        };
                        label.textContent = languages.map(lang => textContent[lang]).join(' / ');
                    });
                });
            }

            // Initial update of content language
            updateContentLanguage(selectedLanguages);

            // Correct answers for validation
            const correctAnswers = {
                question1: 'a',
                question2: 'b',
                question3: 'a',
                question4: 'd',
                question5: 'a'
                // Add more questions here
            };

            document.querySelectorAll('input[type="radio"]').forEach(input => {
                input.addEventListener('change', (event) => {
                    const questionName = event.target.name;
                    const selectedValue = event.target.value;
                    const questionOptions = document.querySelectorAll(
                        `input[name="${questionName}"]`);

                    questionOptions.forEach(option => {
                        const parentLabel = option.nextElementSibling;
                        parentLabel.classList.remove('text-danger', 'text-success');
                        if (option.checked) {
                            if (selectedValue === correctAnswers[questionName]) {
                                parentLabel.classList.add('text-success');
                            } else {
                                parentLabel.classList.add('text-danger');
                                document.querySelector(
                                    `input[name="${questionName}"][value="${correctAnswers[questionName]}"]`
                                ).nextElementSibling.classList.add('text-success');
                            }
                        }
                    });
                });
            });
        });
    </script>
</body>

</html>
