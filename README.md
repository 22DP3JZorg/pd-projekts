# Kas ir API?
Lietojumprogrammas saskarne (angļu: application programming interface, API) ir iepriekš definētu klašu, procedūru, funkciju, struktūru un konstanšu kopums, kas tiek pasniegts kā pielikums (bibliotēkas, servisi), kuru iespējams izmantot ārējiem programmatūras produktiem. Izmanto programmētāji, lai rakstītu dažādus programmu pielikumus.

# Kā deklarēt mainīgo PHP
PHP valodā mainīgos var deklarēt, izmantojot $ simbolu un mainīgā nosaukumu.
'''php
$vards = "Jekabs";
$kurss = "DP3-3";
'''

Mainīgā datu tipu var norādīt, pievienojot to deklarācijai pēc kolonnas (:).
'''php
$skaitlis: int = 10;
$virkne: string = "Sveika pasaule!";
'''

# Kādu arhitektūru izmanto Laravel
Laravel ir MVC (Model-View-Controller) arhitektūras ietvaros balstīta PHP tīmekļa lietojumprogrammu karkasa. Šī arhitektūra sadala lietojumprogrammu trīs slāņos:

*Modelis:* Šajā slānī tiek definēta lietojumprogrammas datu struktūra un loģika. Tas parasti sastāv no klasēm, kas attēlo datu bāzes tabulas un veic CRUD (Create, Read, Update, Delete) operācijas.
*Skats:* Šajā slānī tiek definēta lietojumprogrammas lietotāja saskarne. Tas parasti sastāv no HTML, CSS un JavaScript kodiem.
*Kontrolētājs:* Šajā slānī tiek apstrādāta lietotāja mijiedarbība un tiek koordinēta datu apmaiņa starp modeli un skatu. Tas parasti sastāv no PHP klasēm, kas apstrādā HTTP pieprasījumus un atbildes.

Laravel darbojas, novirzot HTTP pieprasījumus uz atbilstošajiem kontrolieriem. Kontrolētājs apstrādā pieprasījumu, iegūst datus no modeļa un sagatavo skatu, kas tiks parādīts lietotājam.

# Kas ir ORM, kāpēc to izmanto tīra SQL vietā?
ORM (Object-Relational Mapping) ir tehnika, kas ļauj programmētājiem strādāt ar datu bāzēm, izmantojot objektus. ORM kartē datu bāzes tabulas uz objektu klasēm un datu bāzes ierakstus uz objektu instancēm. Tas ļauj programmētājiem manipulēt ar datu bāzi, izmantojot objektorientētu programmēšanas paradigmu, nevis rakstot tīru SQL.

# Eloquent ORM pieprasījums
'''php
$users = User::where('rating', '>', 4)->get();
'''