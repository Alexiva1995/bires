<?php namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use App\Models\Country;

class ContriesSedders extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {

        $arrayCountries=[ [ "id"=>"1",
        "name"=>"Australia",

        ],
        [ "id"=>"2",
        "name"=>"Austria",


        ],
        [ "id"=>"3",
        "name"=>"Azerbaiyán",


        ],
        [ "id"=>"4",
        "name"=>"Anguilla",


        ],
        [ "id"=>"5",
        "name"=>"Argentina",


        ],
        [ "id"=>"6",
        "name"=>"Armenia",


        ],
        [ "id"=>"7",
        "name"=>"Bielorrusia",


        ],
        [ "id"=>"8",
        "name"=>"Belice",


        ],
        [ "id"=>"9",
        "name"=>"Bélgica",


        ],
        [ "id"=>"10",
        "name"=>"Bermudas",


        ],
        [ "id"=>"11",
        "name"=>"Bulgaria",


        ],
        [ "id"=>"12",
        "name"=>"Brasil",


        ],
        [ "id"=>"13",
        "name"=>"Reino Unido",


        ],
        [ "id"=>"14",
        "name"=>"Hungría",


        ],
        [ "id"=>"15",
        "name"=>"Vietnam",


        ],
        [ "id"=>"16",
        "name"=>"Haiti",


        ],
        [ "id"=>"17",
        "name"=>"Guadalupe",


        ],
        [ "id"=>"18",
        "name"=>"Alemania",


        ],
        [ "id"=>"19",
        "name"=>"Países Bajos, Holanda",


        ],
        [ "id"=>"20",
        "name"=>"Grecia",


        ],
        [ "id"=>"21",
        "name"=>"Georgia",


        ],
        [ "id"=>"22",
        "name"=>"Dinamarca",


        ],
        [ "id"=>"23",
        "name"=>"Egipto",


        ],
        [ "id"=>"24",
        "name"=>"Israel",


        ],
        [ "id"=>"25",
        "name"=>"India",


        ],
        [ "id"=>"26",
        "name"=>"Irán",


        ],
        [ "id"=>"27",
        "name"=>"Irlanda",


        ],
        [ "id"=>"28",
        "name"=>"España",


        ],
        [ "id"=>"29",
        "name"=>"Italia",


        ],
        [ "id"=>"30",
        "name"=>"Kazajstán",


        ],
        [ "id"=>"31",
        "name"=>"Camerún",


        ],
        [ "id"=>"32",
        "name"=>"Canadá",


        ],
        [ "id"=>"33",
        "name"=>"Chipre",


        ],
        [ "id"=>"34",
        "name"=>"Kirguistán",


        ],
        [ "id"=>"35",
        "name"=>"China",


        ],
        [ "id"=>"36",
        "name"=>"Costa Rica",


        ],
        [ "id"=>"37",
        "name"=>"Kuwait",


        ],
        [ "id"=>"38",
        "name"=>"Letonia",


        ],
        [ "id"=>"39",
        "name"=>"Libia",


        ],
        [ "id"=>"40",
        "name"=>"Lituania",


        ],
        [ "id"=>"41",
        "name"=>"Luxemburgo",


        ],
        [ "id"=>"42",
        "name"=>"México",


        ],
        [ "id"=>"43",
        "name"=>"Moldavia",


        ],
        [ "id"=>"44",
        "name"=>"Mónaco",


        ],
        [ "id"=>"45",
        "name"=>"Nueva Zelanda",


        ],
        [ "id"=>"46",
        "name"=>"Noruega",


        ],
        [ "id"=>"47",
        "name"=>"Polonia",


        ],
        [ "id"=>"48",
        "name"=>"Portugal",


        ],
        [ "id"=>"49",
        "name"=>"Reunión",


        ],
        [ "id"=>"50",
        "name"=>"Rusia",


        ],
        [ "id"=>"51",
        "name"=>"El Salvador",


        ],
        [ "id"=>"52",
        "name"=>"Eslovaquia",


        ],
        [ "id"=>"53",
        "name"=>"Eslovenia",


        ],
        [ "id"=>"54",
        "name"=>"Surinam",


        ],
        [ "id"=>"55",
        "name"=>"Estados Unidos",


        ],
        [ "id"=>"56",
        "name"=>"Tadjikistan",


        ],
        [ "id"=>"57",
        "name"=>"Turkmenistan",


        ],
        [ "id"=>"58",
        "name"=>"Islas Turcas y Caicos",


        ],
        [ "id"=>"59",
        "name"=>"Turquía",


        ],
        [ "id"=>"60",
        "name"=>"Uganda",


        ],
        [ "id"=>"61",
        "name"=>"Uzbekistán",


        ],
        [ "id"=>"62",
        "name"=>"Ucrania",


        ],
        [ "id"=>"63",
        "name"=>"Finlandia",


        ],
        [ "id"=>"64",
        "name"=>"Francia",


        ],
        [ "id"=>"65",
        "name"=>"República Checa",


        ],
        [ "id"=>"66",
        "name"=>"Suiza",


        ],
        [ "id"=>"67",
        "name"=>"Suecia",


        ],
        [ "id"=>"68",
        "name"=>"Estonia",


        ],
        [ "id"=>"69",
        "name"=>"Corea del Sur",


        ],
        [ "id"=>"70",
        "name"=>"Japón",


        ],
        [ "id"=>"71",
        "name"=>"Croacia",


        ],
        [ "id"=>"72",
        "name"=>"Rumanía",


        ],
        [ "id"=>"73",
        "name"=>"Hong Kong",


        ],
        [ "id"=>"74",
        "name"=>"Indonesia",


        ],
        [ "id"=>"75",
        "name"=>"Jordania",


        ],
        [ "id"=>"76",
        "name"=>"Malasia",


        ],
        [ "id"=>"77",
        "name"=>"Singapur",


        ],
        [ "id"=>"78",
        "name"=>"Taiwan",


        ],
        [ "id"=>"79",
        "name"=>"Bosnia y Herzegovina",


        ],
        [ "id"=>"80",
        "name"=>"Bahamas",


        ],
        [ "id"=>"81",
        "name"=>"Chile",


        ],
        [ "id"=>"82",
        "name"=>"Colombia",


        ],
        [ "id"=>"83",
        "name"=>"Islandia",


        ],
        [ "id"=>"84",
        "name"=>"Corea del Norte",


        ],
        [ "id"=>"85",
        "name"=>"Macedonia",


        ],
        [ "id"=>"86",
        "name"=>"Malta",


        ],
        [ "id"=>"87",
        "name"=>"Pakistán",


        ],
        [ "id"=>"88",
        "name"=>"Papúa-Nueva Guinea",


        ],
        [ "id"=>"89",
        "name"=>"Perú",


        ],
        [ "id"=>"90",
        "name"=>"Filipinas",


        ],
        [ "id"=>"91",
        "name"=>"Arabia Saudita",


        ],
        [ "id"=>"92",
        "name"=>"Tailandia",


        ],
        [ "id"=>"93",
        "name"=>"Emiratos Árabes Unidos",


        ],
        [ "id"=>"94",
        "name"=>"Groenlandia",


        ],
        [ "id"=>"95",
        "name"=>"Venezuela",


        ],
        [ "id"=>"96",
        "name"=>"Zimbabwe",


        ],
        [ "id"=>"97",
        "name"=>"Kenia",


        ],
        [ "id"=>"98",
        "name"=>"Algeria",


        ],
        [ "id"=>"99",
        "name"=>"Líbano",


        ],
        [ "id"=>"100",
        "name"=>"Botsuana",


        ],
        [ "id"=>"101",
        "name"=>"Tanzania",


        ],
        [ "id"=>"102",
        "name"=>"Namibia",


        ],
        [ "id"=>"103",
        "name"=>"Ecuador",


        ],
        [ "id"=>"104",
        "name"=>"Marruecos",


        ],
        [ "id"=>"105",
        "name"=>"Ghana",


        ],
        [ "id"=>"106",
        "name"=>"Siria",


        ],
        [ "id"=>"107",
        "name"=>"Nepal",


        ],
        [ "id"=>"108",
        "name"=>"Mauritania",


        ],
        [ "id"=>"109",
        "name"=>"Seychelles",


        ],
        [ "id"=>"110",
        "name"=>"Paraguay",


        ],
        [ "id"=>"111",
        "name"=>"Uruguay",


        ],
        [ "id"=>"112",
        "name"=>"Congo (Brazzaville)",


        ],
        [ "id"=>"113",
        "name"=>"Cuba",


        ],
        [ "id"=>"114",
        "name"=>"Albania",


        ],
        [ "id"=>"115",
        "name"=>"Nigeria",


        ],
        [ "id"=>"116",
        "name"=>"Zambia",


        ],
        [ "id"=>"117",
        "name"=>"Mozambique",


        ],
        [ "id"=>"118",
        "name"=>"Angola",


        ],
        [ "id"=>"119",
        "name"=>"Sri Lanka",


        ],
        [ "id"=>"120",
        "name"=>"Etiopía",


        ],
        [ "id"=>"121",
        "name"=>"Túnez",


        ],
        [ "id"=>"122",
        "name"=>"Bolivia",


        ],
        [ "id"=>"123",
        "name"=>"Panamá",


        ],
        [ "id"=>"124",
        "name"=>"Malawi",


        ],
        [ "id"=>"125",
        "name"=>"Liechtenstein",


        ],
        [ "id"=>"126",
        "name"=>"Bahrein",


        ],
        [ "id"=>"127",
        "name"=>"Barbados",


        ],
        [ "id"=>"128",
        "name"=>"Chad",


        ],
        [ "id"=>"129",
        "name"=>"Man, Isla de",


        ],
        [ "id"=>"130",
        "name"=>"Jamaica",


        ],
        [ "id"=>"131",
        "name"=>"Malí",


        ],
        [ "id"=>"132",
        "name"=>"Madagascar",


        ],
        [ "id"=>"133",
        "name"=>"Senegal",


        ],
        [ "id"=>"134",
        "name"=>"Togo",


        ],
        [ "id"=>"135",
        "name"=>"Honduras",


        ],
        [ "id"=>"136",
        "name"=>"República Dominicana",


        ],
        [ "id"=>"137",
        "name"=>"Mongolia",


        ],
        [ "id"=>"138",
        "name"=>"Irak",


        ],
        [ "id"=>"139",
        "name"=>"Sudáfrica",


        ],
        [ "id"=>"140",
        "name"=>"Aruba",


        ],
        [ "id"=>"141",
        "name"=>"Gibraltar",


        ],
        [ "id"=>"142",
        "name"=>"Afganistán",


        ],
        [ "id"=>"143",
        "name"=>"Andorra",


        ],
        [ "id"=>"144",
        "name"=>"Antigua y Barbuda",


        ],
        [ "id"=>"145",
        "name"=>"Bangladesh",


        ],
        [ "id"=>"146",
        "name"=>"Benín",


        ],
        [ "id"=>"147",
        "name"=>"Bután",


        ],
        [ "id"=>"148",
        "name"=>"Islas Virgenes Británicas",


        ],
        [ "id"=>"149",
        "name"=>"Brunéi",


        ],
        [ "id"=>"150",
        "name"=>"Burkina Faso",


        ],
        [ "id"=>"151",
        "name"=>"Burundi",


        ],
        [ "id"=>"152",
        "name"=>"Camboya",


        ],
        [ "id"=>"153",
        "name"=>"Cabo Verde",


        ],
        [ "id"=>"154",
        "name"=>"Comores",


        ],
        [ "id"=>"155",
        "name"=>"Congo (Kinshasa)",


        ],
        [ "id"=>"156",
        "name"=>"Cook, Islas",


        ],
        [ "id"=>"157",
        "name"=>"Costa de Marfil",


        ],
        [ "id"=>"158",
        "name"=>"Djibouti, Yibuti",


        ],
        [ "id"=>"159",
        "name"=>"Timor Oriental",


        ],
        [ "id"=>"160",
        "name"=>"Guinea Ecuatorial",


        ],
        [ "id"=>"161",
        "name"=>"Eritrea",


        ],
        [ "id"=>"162",
        "name"=>"Feroe, Islas",


        ],
        [ "id"=>"163",
        "name"=>"Fiyi",


        ],
        [ "id"=>"164",
        "name"=>"Polinesia Francesa",
        ],
        [ "id"=>"165",
        "name"=>"Gabón",
        ],
        [ "id"=>"166",
        "name"=>"Gambia",
        ],
        [ "id"=>"167",
        "name"=>"Granada",
        ],
        [ "id"=>"168",
        "name"=>"Guatemala",
        ],
        [ "id"=>"169",
        "name"=>"Guernsey",
        ],
        [ "id"=>"170",
        "name"=>"Guinea",
        ],
        [ "id"=>"171",
        "name"=>"Guinea-Bissau",
        ],
        [ "id"=>"172",
        "name"=>"Guyana",
        ],
        [ "id"=>"173",
        "name"=>"Jersey",
        ],
        [ "id"=>"174",
        "name"=>"Kiribati",
        ],
        [ "id"=>"175",
        "name"=>"Laos",
        ],
        [ "id"=>"176",
        "name"=>"Lesotho",
        ],
        [ "id"=>"177",
        "name"=>"Liberia",
        ],
        [ "id"=>"178",
        "name"=>"Maldivas",
        ],
        [ "id"=>"179",
        "name"=>"Martinica",
        ],
        [ "id"=>"180",
        "name"=>"Mauricio",
        ],
        [ "id"=>"181",
        "name"=>"Myanmar",
        ],
        [ "id"=>"182",
        "name"=>"Nauru",
        ],
        [ "id"=>"183",
        "name"=>"Antillas Holandesas",
        ],
        [ "id"=>"184",
        "name"=>"Nueva Caledonia",
        ],
        [ "id"=>"185",
        "name"=>"Nicaragua",
        ],
        [ "id"=>"186",
        "name"=>"Níger",
        ],
        [ "id"=>"187",
        "name"=>"Norfolk Island",
        ],
        [ "id"=>"188",
        "name"=>"Omán",
        ],
        [ "id"=>"189",
        "name"=>"Isla Pitcairn",
        ],
        [ "id"=>"190",
        "name"=>"Qatar",
        ],
        [ "id"=>"191",
        "name"=>"Ruanda",
        ],
        [ "id"=>"192",
        "name"=>"Santa Elena",
        ],
        [ "id"=>"193",
        "name"=>"San Cristobal y Nevis",
        ],
        [ "id"=>"194",
        "name"=>"Santa Lucía",
        ],
        [ "id"=>"195",
        "name"=>"San Pedro y Miquelón",
        ],
        [ "id"=>"196",
        "name"=>"San Vincente y Granadinas",
        ],
        [ "id"=>"197",
        "name"=>"Samoa",
        ],
        [ "id"=>"198",
        "name"=>"San Marino",
        ],
        [ "id"=>"199",
        "name"=>"San Tomé y Príncipe",
        ],
        [ "id"=>"200",
        "name"=>"Serbia y Montenegro",
        ],
        [ "id"=>"201",
        "name"=>"Sierra Leona",
        ],
        [ "id"=>"202",
        "name"=>"Islas Salomón",
        ],
        [ "id"=>"203",
        "name"=>"Somalia",
        ],
        [ "id"=>"204",
        "name"=>"Sudán",
        ],
        [ "id"=>"205",
        "name"=>"Swazilandia",
        ],
        [ "id"=>"206",
        "name"=>"Tokelau",
        ],
        [ "id"=>"207",
        "name"=>"Tonga",
        ],
        [ "id"=>"208",
        "name"=>"Trinidad y Tobago",
        ],
        [ "id"=>"209",
        "name"=>"Tuvalu",
        ],
        [ "id"=>"210",
        "name"=>"Vanuatu",
        ],
        [ "id"=>"211",
        "name"=>"Wallis y Futuna",
        ],
        [ "id"=>"212",
        "name"=>"Sáhara Occidental",
        ],
        [ "id"=>"213",
        "name"=>"Yemen",
        ],
        [ "id"=>"214",
        "name"=>"Puerto Rico",
        ]];

        foreach ($arrayCountries as $countries) {
            Country::create($countries);
        }

    }

}
