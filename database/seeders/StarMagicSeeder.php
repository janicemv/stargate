<?php

namespace Database\Seeders;

use App\Models\StarMagic;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StarMagicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'star_id' => 61,
                'type' => 'behenian',
                'planets' => 'Mars, Jupiter',
                'metals' => 'Iron',
                'gemstones' => 'Jasper',
                'plants' => 'Banana',
                'description' => 'A wolf jumping',
                'magic' => 'Heals blood, cools fevers',
                'reference' => 'Christopher Penczak – Ascension Magick: Ritual, Myth & Healing for the New Aeon',
                'url' => null,
                'user_id' => 1
            ],
            [
                'star_id' => 16,
                'type' => 'behenian',
                'planets' => 'Venus, Mars',
                'metals' => 'Iron',
                'gemstones' => 'Ruby',
                'plants' => 'Milk thistle',
                'description' => 'An ascending God',
                'magic' => 'Destruction, binding, protection and defense',
                'reference' => 'Christopher Penczak – Ascension Magick: Ritual, Myth & Healing for the New Aeon',
                'url' => null,
                'user_id' => 1
            ],
            [
                'star_id' => 31,
                'type' => 'behenian',
                'planets' => 'Saturn, Jupiter',
                'metals' => 'Lead',
                'gemstones' => 'Diamond',
                'plants' => 'Artemisia',
                'description' => 'A decapitated head',
                'magic' => 'Protect from harmful magic, revitalize physical body',
                'reference' => 'Christopher Penczak – Ascension Magick: Ritual, Myth & Healing for the New Aeon',
                'url' => null,
                'user_id' => 1
            ],
            [
                'star_id' => 39,
                'type' => 'behenian',
                'planets' => 'Venus, Moon',
                'metals' => 'Silver, Copper',
                'gemstones' => 'Magnetite',
                'plants' => 'Artemisia, chicory, periwinkle',
                'description' => 'Bull, wolf tooth',
                'magic' => 'Generate love and friendship, protect travelers, gather people with similar interests',
                'reference' => 'Christopher Penczak – Ascension Magick: Ritual, Myth & Healing for the New Aeon',
                'url' => null,
                'user_id' => 1
            ],
            [
                'star_id' => 32,
                'type' => 'behenian',
                'planets' => 'Mars, Saturn',
                'metals' => 'Silver or Lead',
                'gemstones' => 'Onyx',
                'plants' => 'Comfrey, henbane',
                'description' => 'Crow, frog',
                'magic' => 'Restricts or binds another\'s magic, gives power over spirits',
                'reference' => 'Christopher Penczak – Ascension Magick: Ritual, Myth & Healing for the New Aeon',
                'url' => null,
                'user_id' => 1
            ],
            [
                'star_id' => 55,
                'type' => 'behenian',
                'planets' => 'Jupiter, Mars',
                'metals' => 'Iron',
                'gemstones' => 'Amethyst',
                'plants' => 'Saffron',
                'description' => 'Scorpion',
                'magic' => 'Wards off evil spirits',
                'reference' => 'Christopher Penczak – Ascension Magick: Ritual, Myth & Healing for the New Aeon',
                'url' => null,
                'user_id' => 1
            ],
            [
                'star_id' => 124,
                'type' => 'behenian',
                'planets' => 'Jupiter, Saturn',
                'metals' => 'Tin',
                'gemstones' => 'Sapphire',
                'plants' => 'Marjoram, mandrake',
                'description' => 'Minstrel',
                'magic' => 'Attract authorities, heal bones and teeth',
                'reference' => 'Christopher Penczak – Ascension Magick: Ritual, Myth & Healing for the New Aeon',
                'url' => null,
                'user_id' => 1
            ],
            [
                'star_id' => 477,
                'type' => 'behenian',
                'planets' => 'Saturn, Mercury',
                'metals' => 'Lead',
                'gemstones' => 'Chalcedony',
                'plants' => 'Catnip, Marjoram',
                'description' => 'Goat',
                'magic' => 'Increases material wealth',
                'reference' => 'Christopher Penczak – Ascension Magick: Ritual, Myth & Healing for the New Aeon',
                'url' => null,
                'user_id' => 1
            ],
            [
                'star_id' => 45,
                'type' => 'behenian',
                'planets' => 'Venus, Mars',
                'metals' => 'Copper',
                'gemstones' => 'Topaz',
                'plants' => 'Rosemary',
                'description' => 'A crowned person',
                'magic' => 'Promote chastity, generate love and goodwill',
                'reference' => 'Christopher Penczak – Ascension Magick: Ritual, Myth & Healing for the New Aeon',
                'url' => null,
                'user_id' => 1
            ],
            [
                'star_id' => 15,
                'type' => 'behenian',
                'planets' => 'Moon, Mars',
                'metals' => 'Mercury',
                'gemstones' => 'Quartz, diodocus',
                'plants' => 'Fennel, diacedonia',
                'description' => 'Torch, pentagram',
                'magic' => 'Influence nature and forces behind nature; can bind another\'s magic, particularly earth or sea magic, gives power over earth and sea spirits',
                'reference' => 'Christopher Penczak – Ascension Magick: Ritual, Myth & Healing for the New Aeon',
                'url' => null,
                'user_id' => 1
            ],
            [
                'star_id' => 330,
                'type' => 'behenian',
                'planets' => 'Mercury, Mars',
                'metals' => 'Mercury',
                'gemstones' => 'Agate',
                'plants' => 'Pennyroyal',
                'description' => 'Rooster',
                'magic' => 'Bind another\'s magic, bring help from gods and spirits',
                'reference' => 'Christopher Penczak – Ascension Magick: Ritual, Myth & Healing for the New Aeon',
                'url' => null,
                'user_id' => 1
            ],
            [
                'star_id' => 354,
                'type' => 'behenian',
                'planets' => 'Jupiter, Mars',
                'metals' => 'Iron',
                'gemstones' => 'Garnet, Granite',
                'plants' => 'Mastic, Artemisia',
                'description' => 'A cat sitting on a throne',
                'magic' => 'Generates a positive temperament',
                'reference' => 'Christopher Penczak – Ascension Magick: Ritual, Myth & Healing for the New Aeon',
                'url' => null,
                'user_id' => 1
            ],
            [
                'star_id' => 399,
                'type' => 'behenian',
                'planets' => 'Cancer, Venus',
                'metals' => 'Silver',
                'gemstones' => 'Beryl',
                'plants' => 'Artemisia',
                'description' => 'Hunting dog',
                'magic' => 'Influence subconscious mind and emotions, develop psychic powers',
                'reference' => 'Christopher Penczak – Ascension Magick: Ritual, Myth & Healing for the New Aeon',
                'url' => null,
                'user_id' => 1
            ],
            [
                'star_id' => 404,
                'type' => 'behenian',
                'planets' => 'Venus, Mercury',
                'metals' => 'Copper',
                'gemstones' => 'Emerald',
                'plants' => 'Sage, mandrake',
                'description' => 'Bird holding a jewel, wheat stalk',
                'magic' => 'Similar to Cauda Ursae, used to imprison enemies and increase telepathy',
                'reference' => 'Christopher Penczak – Ascension Magick: Ritual, Myth & Healing for the New Aeon',
                'url' => null,
                'user_id' => 1
            ],
            [
                'star_id' => 435,
                'type' => 'behenian',
                'planets' => 'Venus, Mercury',
                'metals' => 'Tin',
                'gemstones' => 'Chrysolite',
                'plants' => 'Succory',
                'description' => 'A descending vulture',
                'magic' => 'Influence over animals and evil spirits',
                'reference' => 'Christopher Penczak – Ascension Magick: Ritual, Myth & Healing for the New Aeon',
                'url' => null,
                'user_id' => 1
            ]
        ];

        foreach ($data as $entry) {
            StarMagic::create($entry);
        }
    }
}
