<?php

namespace App\Http\Controllers;
use App\User;
use App\Http\Controllers\Controller;


use app\forms\PersonSearchForm;

use app\forms\FriendForm;
//use app\forms\ChatForm;

class PersonListCtrl {
	public $id;
    private $form; //dane formularza wyszukiwania
    private $records; //rekordy pobrane z bazy danych
	 private $myfriend; //rekordy pobrane z bazy danych
	  private $myfriend2; //rekordy pobrane z bazy danych
	   private $somfriend; //rekordy pobrane z bazy danych
	  private $somfriend2; //rekordy pobrane z bazy danych
	 public $fd;

    public function __construct() {
        //stworzenie potrzebnych obiektów
        $this->form = new PersonSearchForm();
		$this->fd = new FriendForm();
    }

    public function validate() {
        // 1. sprawdzenie, czy parametry zostały przekazane
        // - nie trzeba sprawdzać
        $this->form->nick = ParamUtils::getFromRequest('nick');
		
        
        $this->form->age = ParamUtils::getFromRequest('age');
        $this->form->gender = ParamUtils::getFromRequest('gender');
        $this->form->email = ParamUtils::getFromRequest('email');
        $this->form->prefM = ParamUtils::getFromRequest('prefM');
        $this->form->height = ParamUtils::getFromRequest('height');
        $this->form->complex = ParamUtils::getFromRequest('complex');
        $this->form->ecolor = ParamUtils::getFromRequest('ecolor');
        $this->form->hcolor = ParamUtils::getFromRequest('hcolor');
        //$this->form->role= ParamUtils::getFromRequest('role', false, 'BÅ‚Ä™dne wywoÅ‚anie aplikacjil');
        $this->form->city = ParamUtils::getFromRequest('city');
        $this->form->prefW = ParamUtils::getFromRequest('prefW');
        $this->form->nation= ParamUtils::getFromRequest('nation');
		

        // 2. sprawdzenie poprawności przekazanych parametrów
        // - nie trzeba sprawdzać

        return !App::getMessages()->isError();
    }
	
	public function validateAccount() {
        //pobierz parametry na potrzeby wyswietlenia danych do edycji
        //z widoku listy osÃ³b (parametr jest wymagany)
        $this->form->id_person = ParamUtils::getFromCleanURL(1, true, 'BÅ‚Ä™dne wywoÅ‚anie aplikacji');
		
        return !App::getMessages()->isError();
    }
	

    public function action_personList() {
        // 1. Walidacja danych formularza (z pobraniem)
        // - W tej aplikacji walidacja nie jest potrzebna, ponieważ nie wystąpią błedy podczas podawania nazwiska.
        //   Jednak pozostawiono ją, ponieważ gdyby uzytkownik wprowadzał np. datę, lub wartość numeryczną, to trzeba
        //   odpowiednio zareagować wyświetlając odpowiednią informację (poprzez obiekt wiadomości Messages)
        $this->validate();

        // 2. Przygotowanie mapy z parametrami wyszukiwania (nazwa_kolumny => wartość)
        $search_params = []; //przygotowanie pustej struktury (aby była dostępna nawet gdy nie będzie zawierała wierszy)
        if (isset($this->form->nick) && strlen($this->form->nick) > 0) {
            $search_params['nick[~]'] = $this->form->nick . '%'; // dodanie symbolu % zastępuje dowolny ciąg znaków na końcu
        }
		
        if (isset($this->form->gender) && strlen($this->form->gender) > 0) {
            $search_params['gender'] = $this->form->gender ; // dodanie symbolu % zastępuje dowolny ciąg znaków na końcu
        }
		
		 if (isset($this->form->prefM) && strlen($this->form->prefM) > 0) {
            $search_params['prefM'] = $this->form->prefM ; // dodanie symbolu % zastępuje dowolny ciąg znaków na końcu
        }
		 if (isset($this->form->prefW) && strlen($this->form->prefW) > 0) {
            $search_params['prefW'] = $this->form->prefW ; // dodanie symbolu % zastępuje dowolny ciąg znaków na końcu
        }
		
		if (isset($this->form->complex) && strlen($this->form->complex) > 0) {
            $search_params['complex'] = $this->form->complex ; // dodanie symbolu % zastępuje dowolny ciąg znaków na końcu
        }
		if (isset($this->form->hcolor) && strlen($this->form->hcolor) > 0) {
            $search_params['hcolor'] = $this->form->hcolor ; // dodanie symbolu % zastępuje dowolny ciąg znaków na końcu
        }
		
		if (isset($this->form->city) && strlen($this->form->city) > 0) {
            $search_params['city'] = $this->form->city ; // dodanie symbolu % zastępuje dowolny ciąg znaków na końcu
        }
		if (isset($this->form->nation) && strlen($this->form->nation) > 0) {
            $search_params['nation'] = $this->form->nation ; // dodanie symbolu % zastępuje dowolny ciąg znaków na końcu
        }
		if (isset($this->form->ecolor) && strlen($this->form->ecolor) > 0) {
            $search_params['ecolor'] = $this->form->ecolor ; // dodanie symbolu % zastępuje dowolny ciąg znaków na końcu
        }
		

        // 3. Pobranie listy rekordów z bazy danych
        // W tym wypadku zawsze wyświetlamy listę osób bez względu na to, czy dane wprowadzone w formularzu wyszukiwania są poprawne.
        // Dlatego pobranie nie jest uwarunkowane poprawnością walidacji (jak miało to miejsce w kalkulatorze)
        //przygotowanie frazy where na wypadek większej liczby parametrów
        $num_params = sizeof($search_params); //policz parametry
        if ($num_params > 1) {
           $where = ["AND" => $search_params];
		}
         else {
            $where = &$search_params;
        }
        //dodanie frazy sortującej po nazwisku
        $where ["ORDER"] = "nick";
        //wykonanie zapytania
		
		
		
		
       /* try {
            $this->records = App::getDB()->select("person", [
                "id_person",
               "nick",
                "pass",
                "gender",
                "email",
                "prefM",
                "age",
                "height",
                "complex",
                "ecolor",
                "hcolor",
                
                "city",
                "prefW",
                "nation",
				"image"
                    ], $where);
					
					
        } catch (\PDOException $e) {
            Utils::addErrorMessage('Wystąpił błąd podczas pobierania rekordów');
            if (App::getConf()->debug)
                Utils::addErrorMessage($e->getMessage()); */
			
			
			$records = DB::table('person')->get();
        }
		
		generateView();
		
	}
	
	
	
		public function action_friendList() {
		
		
		
		
		
	
		
					
				 $this->myfriend = App::getDB()->select("person",
		//"[>]friend" => ["id_person"=>"id_person1",
		["[>]friend" => ["id_person"=>"id_person2"]]
				, 			[
                "person.id_person",
               "person.nick",
                "person.pass",
                "person.gender",
                "person.email",
                "person.prefM",
                "person.age",
                "person.height",
                "person.complex",
                "person.ecolor",
                "person.hcolor",
                
                "person.city",
                "person.prefW",
                "person.nation",
				"person.image",
				"friend.id_person1",
				"friend.id_person2",
				"friend.type"
                    ],[
    
        "AND"=>['friend.id_person2[!]' => $_SESSION['user_id'],'friend.id_person1' => $_SESSION['user_id']
    ]
                ]);
				
				
				
			$this->myfriend2 = App::getDB()->select("person",
		//"[>]friend" => ["id_person"=>"id_person1",
		["[>]friend" => ["id_person"=>"id_person1"]]
				, 			[
                "person.id_person",
               "person.nick",
                "person.pass",
                "person.gender",
                "person.email",
                "person.prefM",
                "person.age",
                "person.height",
                "person.complex",
                "person.ecolor",
                "person.hcolor",
                
                "person.city",
                "person.prefW",
                "person.nation",
				"person.image",
				"friend.id_person1",
				"friend.id_person2",
				"friend.type"
                    ],[
    
        "AND"=>['friend.id_person1[!]' => $_SESSION['user_id'],'friend.id_person2' => $_SESSION['user_id']
    ]
                ]);	
				
				 
				
				 //["OR"=>["friend.id_person1" => !($_SESSION['user_id']),
					//"friend.id_person2" != $_SESSION['user_id']	
					
       
				
			App::getSmarty()->assign('friends', $this->myfriend);
			
			App::getSmarty()->assign('friends2', $this->myfriend2);
        App::getSmarty()->display('friends.tpl');
				
				
				/*	
				 $this->mfShow = App::getDB()->select("person", [
				("[>]description" => array("id_person"=>"id_pd"))"id_person",
               "nick",
                "pass",
                "gender",
                "email",
                "prefM",
                "age",
                "height",
                "complex",
                "ecolor",
                "hcolor",
                
                "city",
                "prefW",
                "nation"
], 
				["ORDER"=>["id_person"],"id_person"=>$this->myfriend[id_person2]]);	
					
        } catch (\PDOException $e) {
            Utils::addErrorMessage('Wystąpił błąd podczas pobierania rekordów');
            if (App::getConf()->debug)
                Utils::addErrorMessage($e->getMessage());
        }*/
		
		//App::getSmarty()->assign('friends', $this->mfShow);  // lista rekordów z bazy danych
		//App::getSmarty()->assign('mf', $this->myfriend);
		
		
		}
		
		public function action_friendListAnother() {
		
		
		
		
		 if ($this->validateAccount()) {
	
		
					
				 $this->somFriend = App::getDB()->select("person",
		//"[>]friend" => ["id_person"=>"id_person1",
		["[>]friend" => ["id_person"=>"id_person2"]]
				, 			[
                "person.id_person",
               "person.nick",
                "person.pass",
                "person.gender",
                "person.email",
                "person.prefM",
                "person.age",
                "person.height",
                "person.complex",
                "person.ecolor",
                "person.hcolor",
                
                "person.city",
                "person.prefW",
                "person.nation",
				"person.image",
				"friend.id_person1",
				"friend.id_person2",
				"friend.type"
                    ],[
    
        "AND"=>['friend.id_person2[!]' => $this->form->id_person,'friend.id_person1' => $this->form->id_person
    ]
                ]);
				
				
				
			$this->somFriend2 = App::getDB()->select("person",
		//"[>]friend" => ["id_person"=>"id_person1",
		["[>]friend" => ["id_person"=>"id_person1"]]
				, 			[
                "person.id_person",
               "person.nick",
                "person.pass",
                "person.gender",
                "person.email",
                "person.prefM",
                "person.age",
                "person.height",
                "person.complex",
                "person.ecolor",
                "person.hcolor",
                
                "person.city",
                "person.prefW",
                "person.nation",
				"person.image",
				"friend.id_person1",
				"friend.id_person2",
				"friend.type"
                    ],[
    
        "AND"=>['friend.id_person1[!]' => $this->form->id_person,'friend.id_person2' => $this->form->id_person
    ]
                ]);	
				
		 }
				
				 //["OR"=>["friend.id_person1" => !($_SESSION['user_id']),
					//"friend.id_person2" != $_SESSION['user_id']	
					
       
				
			App::getSmarty()->assign('friends', $this->somFriend);
			App::getSmarty()->assign('friends2', $this->somFriend2);
        App::getSmarty()->display('friends.tpl');
		
		
		}
		
		
		
        // 4. wygeneruj widok
        
		public function generateView(){
		App::getSmarty()->assign('searchForm', $this->form); // dane formularza (wyszukiwania w tym wypadku)
        global $user;

		App::getSmarty()->assign('user',$user);
		App::getSmarty()->assign('people', $this->records);  // lista rekordów z bazy danych
		
        return view('ListUsers.tpl');
		realese
		
    }

}
