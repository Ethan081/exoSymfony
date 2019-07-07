<?php


namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class HomeController extends AbstractController
{
    /**
     * @Route("/hello", name=" hello_index")
     */
    public function helloWorld(){

        return new Response('Hello les gens.');
    }
//    --------------------------------------------------------------------------------------------------------------
    /**
     * @Route("/firstName", name = "firstName_index")
     */
    public function first_name()
    {
        // Permet de debuger
//        var_dump("Etienne Z"); die;

        //return une reponse en utilisant la class Response
        return new Response('Hello index.');
    }
//    --------------------------------------------------------------------------------------------------------------
    /**
     * @Route ("/majeur" , name = "your_age_index")
     */

    public function majeur(Request $request)
    {
        //je recupaire l info de l URL a l aide de query get .
        $age = $request->query->get('age');
        var_dump($request->query);

        if ($age < 18){
            //J'utilise la class Responce pour renvoyer une reponse au navigareur
            return new Response('Tu es mineur. Tu as ' . $age);
        }elseif($age > 70){
            return new Response('Papy.');
        }else{
            return new Response('Tu es majeur.');
        }
    }
//    --------------------------------------------------------------------------------------------------------------

    //Wildcard
    /**
     * @Route("/list/{page}" , name = "numero_de_page")
     */
    //je recupaire le num de la page dans l URL.
    public function list($page)
    {
        //retourne une reponse  le num de la page.
        return new Response('Numero de la page ' . $page);
    }

//    --------------------------------------------------------------------------------------------------------------
    // redirection vers une autre page.

    /**
     * @Route("/adress", name = "adress")
     */
    public function adress(Request $request)
    {
        if($request->query->get('adress') === '12 chemin vert') {
            //return une reponse en utilisant la class Response
            return new Response('12 chemin vert');
        }else{
            //jeredirige vers la page /firstName.
            return $this->redirectToRoute('firstName_index');
        }
    }
//    --------------------------------------------------------------------------------------------------------------
    //Twig
    /**
     * @Route("/twig" , name="twig")
     */
    public function twigBasic()
    {
        //reponce http valide
        //qui appel un fichier twig
        // et affiche son contenu (HTML)
        return $this->render("basic.html.twig");
    }
    //j ai cree une route
    /**
     * @Route("/homePage" , name="homePage")
     */
    public function homePage()
    {
        return $this->render("homePage.html.twig");
    }
//    --------------------------------------------------------------------------------------------------------------
    /**
     * @Route("/showArticle", name="showArticle")
     */
    public  function showArticle()
    {
        //on simule une requete en base de donnee
        //pour recuperer un article
        $titre = "Titre.";
        $article = "Bonjour je suis un article.Blablabla.";
        $auteur = "Jean-Raoul.";

        //et en second parametre un tableau
        //qui contient les variables a envoyer au fichier Twig article.html.twig
        //(les variables envoyees au fichier Twig
        //pourront etre appelees dans le fichier Twig)
        //return $this->render("nom_twig_files", [ tableau 'variable twig' => contenue db a afficher dans le templates]);
        return $this->render("article.html.twig", [
                //j assigne ma variable php $article a une variable twig 'variableArticleTwig'
                'titreArticle' => $titre,
                'paragrapheArticle' => $article,
                'auteurArticle' => $auteur
            ]

        );

    }


//    --------------------------------------------------------------------------------------------------------------

    //Exo 01 Faire passer , 2 variables depuis le controler. Faire une condition Boolean et String.

    /**
     * @Route("/exo01" , name = "exo01")
     */

    public function exo01()
    {
        //je declare 2 variables
        $display = true;
        $vin = 'a boire avec moderation';

//        je compile la page exo01.html.twig
        return $this->render("exo01.html.twig",
            [
//                je cree deux variable twig a afficher dans ma vue
            'display'=>$display,
            'vin'=>$vin
            ]
        );

    }
//    --------------------------------------------------------------------------------------------------------------
    //Exo 02 Faire un boucle qui affiche le contenue d un array.
    /**
     * @Route("/exo02", name="exo02")
     */
    //je declare une methode
    public function exo02()
    {
        //je declare une variable qui est un array
        $tableau = [3, 56,'Jean-Raoul du Cable', true, 8263];

        //je recup le fichier twig et le compile en declarent une variable twig qui contient ma variable tableau.
        return $this->render('exo02.html.twig',
        [
            'tableau'=> $tableau
        //ou 'tableau'=>[3, 56,'Jean-Raoul du Cable', true, 8263];
        ]
        );
    }
//    --------------------------------------------------------------------------------------------------------------
    //Exo 03 afficher les valeurs d un tableau multidimentionnel.
    //    je peux utiliser la whildcard
    ///**
    //     * @Route("/exo03/{age}", name = "exo03")
    //     */
    /**
     * @Route("/exo03", name = "exo03")
     */

    //Je peux mettre comme argument de ma function la whildcard {age}.
    //public function exo03($age)
    public function exo03(Request $request)
    {
        // Je recupere le paramettre  get age dans l'url
        $age = $request->query->get('age');
        // je cree un tableau multidimentionnel array = [[],[],[]];
        $starDisco = [
            [
                //j ai une key=>value
                'nom'=>'Pierre',
                'age'=>'74',
                'img'=>'http://www.flashebdo.com/wp-content/uploads/2015/09/portrait-pierre-perret.jpg',
                'bio'=>'Auteur jouant sur les mots et la musicalité de la langue française, Pierre Perret ne dédaigne
                 pas pour autant l’argot, qu\'il emploie à dessein dans de nombreux textes (il a réécrit les fables de 
                 La Fontaine). L\'interprète, dans un style apparemment naïf, voire enfantin, avec candeur et humanisme,
                  pose nombre de questions pertinentes qu\'il déclame avec un sourire malicieux.Chanteur populaire 
                  et auteur reconnu, il s\'illustre par un répertoire hétéroclite composé tour à tour de chansons 
                  enfantines, comiques, grivoises, légères ou engagées, qui naviguent entre humour et tendresse. 
                  En marge de la chanson, il a publié de nombreux ouvrages sur la langue française et plusieurs sur 
                  la gastronomie, son autre grande passion.'
            ],
            [
                'nom'=>'Sheila',
                'age'=>'65',
                'img'=>'https://statics.digitick.com/commun/images/upload/evenements/sheila3_300.jpg',
                'bio'=>'Icône des années yéyé en France, Sheila devient une vedette populaire dès la sortie de son 
                deuxième 45 tours en 1963 Selon le livre 40 ans de tubes 1960-2000, Sheila est l\'artiste féminine 
                française qui a enregistré le plus de tubes entre 1963 et 19823.Sheila connaît le succès international
                 lors de sa période disco, pendant laquelle elle collabore avec Nile Rodgers et le groupe Chic en 1980
                 , puis avec Keith Olsen en 1981. Elle entre alors dans les classements du magazine américain Cash Box
                  ainsi que dans bon nombre de pays étrangers4.'
            ],
            [
                'nom'=>'Claude',
                'age'=>'1939-1978',
                'img'=>'http://img.allformusic.fr/artiste/c/claude-francois/1.jpg',
                'bio'=>'Claude François, surnommé « Cloclo », né le 1er février 1939 à Ismaïlia (Égypte) et mort 
                accidentellement le 11 mars 1978 à Paris, est un chanteur, danseur, musicien et producteur 
                musical français des années 1960 et 1970.Lors de ses seize années de carrière, il est un des
                artistes français les plus appréciés du public. Nombre de ses chansons sont restées célèbres,
                 comme Belles ! Belles ! Belles !, Cette année-là, Le Lundi au soleil, Le téléphone pleure,
                  Magnolias for Ever, Alexandrie Alexandra ou encore Comme d\'habitude (My Way en version anglaise).'
            ],
            [
                'nom'=>'Johnny ',
                'age'=>'1943-2017',
                'img'=>'https://images-na.ssl-images-amazon.com/images/I/41cp4C-eANL.jpg',
                'bio'=>'Johnny Hallyday, de son vrai nom Jean-Philippe Smet, né le 15 juin 1943 dans le 9e 
                arrondissement de Paris et mort le 5 décembre 2017 à Marnes-la-Coquette (Hauts-de-Seine), 
                est un chanteur, compositeur et acteur français.Durant ses 57 ans de carrière, il
                 s\'impose comme l\'un des plus célèbres chanteurs francophones et l\'une des personnalités les 
                 plus présentes dans le paysage médiatique français.'
            ]

        ];

        return $this->render('exo03.html.twig',
        [
            'starDisco'=> $starDisco,
            'age'=>$age
        ]
        );
    }
//    --------------------------------------------------------------------------------------------------------------


}