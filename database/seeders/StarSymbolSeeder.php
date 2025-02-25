<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\StarSymbol;

class StarSymbolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'star_id' => 61,
                'path' => 'stars/alcameth.png',
                'description' => "Agrippa's Sigil of Arcturus",
                'reference' => 'Christopher Warnock: Fixed Star, Sign and Constellation Magic',
                'url' => 'https://books.google.be/books?id=oniIDwAAQBAJ&lpg=PP3&pg=PP3#v=onepage&q&f=false',
                'user_id' => 1
            ],
            [
                'star_id' => 16,
                'path' => 'stars/aldebaran.png',
                'description' => "Agrippa's Sigil of Aldebaran",
                'reference' => 'Christopher Warnock: Fixed Star, Sign and Constellation Magic',
                'url' => 'https://books.google.be/books?id=oniIDwAAQBAJ&lpg=PP3&pg=PP3#v=onepage&q&f=false',
                'user_id' => 1
            ],
            [
                'star_id' => 31,
                'path' => 'stars/algol.png',
                'description' => "Bodleian MS's Sigil of Algol",
                'reference' => 'Christopher Warnock: Fixed Star, Sign and Constellation Magic',
                'url' => 'https://books.google.be/books?id=oniIDwAAQBAJ&lpg=PP3&pg=PP3#v=onepage&q&f=false',
                'user_id' => 1
            ],
            [
                'star_id' => 31,
                'path' => 'stars/algol1.png',
                'description' => "Agrippa's Sigil of Algol",
                'reference' => 'Christopher Warnock: Fixed Star, Sign and Constellation Magic',
                'url' => 'https://books.google.be/books?id=oniIDwAAQBAJ&lpg=PP3&pg=PP3#v=onepage&q&f=false',
                'user_id' => 1
            ],
            [
                'star_id' => 39,
                'path' => 'stars/alkaid.png',
                'description' => "Agrippa's Sigil of Alkaid",
                'reference' => 'Christopher Warnock: Fixed Star, Sign and Constellation Magic',
                'url' => 'https://books.google.be/books?id=oniIDwAAQBAJ&lpg=PP3&pg=PP3#v=onepage&q&f=false',
                'user_id' => 1
            ],
            [
                'star_id' => 32,
                'path' => 'stars/corvus.png',
                'description' => "Agrippa's Sigil of the Wing of Corvus",
                'reference' => 'Christopher Warnock: Fixed Star, Sign and Constellation Magic',
                'url' => 'https://books.google.be/books?id=oniIDwAAQBAJ&lpg=PP3&pg=PP3#v=onepage&q&f=false',
                'user_id' => 1
            ],
            [
                'star_id' => 176,
                'path' => 'stars/corvus.png',
                'description' => "Agrippa's Sigil of the Wing of Corvus",
                'reference' => 'Christopher Warnock: Fixed Star, Sign and Constellation Magic',
                'url' => 'https://books.google.be/books?id=oniIDwAAQBAJ&lpg=PP3&pg=PP3#v=onepage&q&f=false',
                'user_id' => 1
            ],
            [
                'star_id' => 55,
                'path' => 'stars/antares.png',
                'description' => "Agrippa's Sigil of Antares",
                'reference' => 'Christopher Warnock: Fixed Star, Sign and Constellation Magic',
                'url' => 'https://books.google.be/books?id=oniIDwAAQBAJ&lpg=PP3&pg=PP3#v=onepage&q&f=false',
                'user_id' => 1
            ],
            [
                'star_id' => 55,
                'path' => 'stars/west-watcher.png',
                'description' => "Antares as the West Watcher",
                'reference' => 'Aileen Daw, Agathos Athenodoros e Sky Zahara: A Magia das Estrelas - Princípios de Magia Estelar',
                'url' => 'https://adharastarpath.wordpress.com/a-magia-das-estrelas-volume-1-principios-de-magia-estelar/',
                'user_id' => 1
            ],
            [
                'star_id' => 124,
                'path' => 'stars/capella.png',
                'description' => "Bodleian MS's Sigil of Capella",
                'reference' => 'Christopher Warnock: Fixed Star, Sign and Constellation Magic',
                'url' => 'https://books.google.be/books?id=oniIDwAAQBAJ&lpg=PP3&pg=PP3#v=onepage&q&f=false',
                'user_id' => 1
            ],
            [
                'star_id' => 477,
                'path' => 'stars/cauda-capricorni.png',
                'description' => "Agrippa's Sigil of Deneb Algedi",
                'reference' => 'Christopher Warnock: Fixed Star, Sign and Constellation Magic',
                'url' => 'https://books.google.be/books?id=oniIDwAAQBAJ&lpg=PP3&pg=PP3#v=onepage&q&f=false',
                'user_id' => 1
            ],
            [
                'star_id' => 477,
                'path' => 'stars/cauda-capricorni1.png',
                'description' => "Bodleian MS's Sigil of Deneb Algedi",
                'reference' => 'Christopher Warnock: Fixed Star, Sign and Constellation Magic',
                'url' => 'https://books.google.be/books?id=oniIDwAAQBAJ&lpg=PP3&pg=PP3#v=onepage&q&f=false',
                'user_id' => 1
            ],
            [
                'star_id' => 45,
                'path' => 'stars/elpheia.png',
                'description' => "Agrippa's Sigil of Elpheia/Alphecca",
                'reference' => 'Christopher Warnock: Fixed Star, Sign and Constellation Magic',
                'url' => 'https://books.google.be/books?id=oniIDwAAQBAJ&lpg=PP3&pg=PP3#v=onepage&q&f=false',
                'user_id' => 1
            ],
            [
                'star_id' => 15,
                'path' => 'stars/pleiades.png',
                'description' => "Agrippa's Sigil of the Pleiades star cluster",
                'reference' => 'Christopher Warnock: Fixed Star, Sign and Constellation Magic',
                'url' => 'https://books.google.be/books?id=oniIDwAAQBAJ&lpg=PP3&pg=PP3#v=onepage&q&f=false',
                'user_id' => 1
            ],
            [
                'star_id' => 330,
                'path' => 'stars/procyon.png',
                'description' => "Bodleian MS's Sigil of Procyon",
                'reference' => 'Christopher Warnock: Fixed Star, Sign and Constellation Magic',
                'url' => 'https://books.google.be/books?id=oniIDwAAQBAJ&lpg=PP3&pg=PP3#v=onepage&q&f=false',
                'user_id' => 1
            ],
            [
                'star_id' => 330,
                'path' => 'stars/procyon1.png',
                'description' => "Agrippa's Sigil of Procyon",
                'reference' => 'Christopher Warnock: Fixed Star, Sign and Constellation Magic',
                'url' => 'https://books.google.be/books?id=oniIDwAAQBAJ&lpg=PP3&pg=PP3#v=onepage&q&f=false',
                'user_id' => 1
            ],
            [
                'star_id' => 354,
                'path' => 'stars/cor-leonis.png',
                'description' => "Agrippa's Sigil of Regulus",
                'reference' => 'Christopher Warnock: Fixed Star, Sign and Constellation Magic',
                'url' => 'https://books.google.be/books?id=oniIDwAAQBAJ&lpg=PP3&pg=PP3#v=onepage&q&f=false',
                'user_id' => 1
            ],
            [
                'star_id' => 354,
                'path' => 'stars/cor-leonis1.png',
                'description' => "Bodleian MS's Sigil of Regulus",
                'reference' => 'Christopher Warnock: Fixed Star, Sign and Constellation Magic',
                'url' => 'https://books.google.be/books?id=oniIDwAAQBAJ&lpg=PP3&pg=PP3#v=onepage&q&f=false',
                'user_id' => 1
            ],
            [
                'star_id' => 399,
                'path' => 'stars/sirius.png',
                'description' => "Bodleian MS & Agrippa's Sigil of Sirius",
                'reference' => 'Christopher Warnock: Fixed Star, Sign and Constellation Magic',
                'url' => 'https://books.google.be/books?id=oniIDwAAQBAJ&lpg=PP3&pg=PP3#v=onepage&q&f=false',
                'user_id' => 1
            ],
            [
                'star_id' => 404,
                'path' => 'stars/spica.png',
                'description' => "Agrippa's Sigil of Spica",
                'reference' => 'Christopher Warnock: Fixed Star, Sign and Constellation Magic',
                'url' => 'https://books.google.be/books?id=oniIDwAAQBAJ&lpg=PP3&pg=PP3#v=onepage&q&f=false',
                'user_id' => 1
            ],
            [
                'star_id' => 404,
                'path' => 'stars/spica1.png',
                'description' => "Bodleian MS's Sigil of Spica",
                'reference' => 'Christopher Warnock: Fixed Star, Sign and Constellation Magic',
                'url' => 'https://books.google.be/books?id=oniIDwAAQBAJ&lpg=PP3&pg=PP3#v=onepage&q&f=false',
                'user_id' => 1
            ],
            [
                'star_id' => 435,
                'path' => 'stars/vega.png',
                'description' => "Bodleian MS & Agrippa's Sigil of Vega",
                'reference' => 'Christopher Warnock: Fixed Star, Sign and Constellation Magic',
                'url' => 'https://books.google.be/books?id=oniIDwAAQBAJ&lpg=PP3&pg=PP3#v=onepage&q&f=false',
                'user_id' => 1
            ],
            [
                'star_id' => 171,
                'path' => 'stars/fomalhaut.png',
                'description' => "Aileen Daw's Stellar glyph of Fomalhaut",
                'reference' => 'Aileen Daw, Agathos Athenodoros e Sky Zahara: A Magia das Estrelas - Princípios de Magia Estelar',
                'url' => 'https://adharastarpath.wordpress.com/a-magia-das-estrelas-volume-1-principios-de-magia-estelar/',
                'user_id' => 1
            ],
            [
                'star_id' => 458,
                'path' => 'stars/draco.png',
                'description' => "Aileen Daw's Stellar glyph of Thuban and Draco",
                'reference' => 'Personal connection of the author',
                'url' => 'https://adharastarpath.wordpress.com/',
                'user_id' => 1
            ]
        ];

        foreach ($data as $entry) {
            StarSymbol::create($entry);
        }
    }
}
