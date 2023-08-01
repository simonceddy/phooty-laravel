<?php
namespace App;

class Inspiring
{
    private static $dennis = [
        'It\'s like finding fault with Miss Venezuela.',
        'There\'s a Blair in there.',
        'That\'s on YouTube, like it or not Paul Bower.',
        'Barlow to Bateman. The Hawks are attacking alphabetically.',
        'Ling\'s running off the ground a little bit gingerly.',
        'He entered the pack optimistically and emerged misty optically.',
        'Scotty Cummings alone in the square, jumping up and down and waving his arms like they\'re playing My Sharona.',
        'Rocca, like my wife driving, needs a fair bit of lane.',
        'Remember the name: Y-Z-E – terrific young player, bad Scrabble hand.',
        'There\'s Koutoufides – more vowels than possessions today.',
        'He\'s like Diogenes or O.J. Simpson - he\'s always searching.',
        'Carr - covered by a third party.',
        'Carr was just poleaxed by his own team-mate. Does that qualify as Croad rage?',
        'Right now Shannon Watt looks like a man in a darkened room trying to discover where all the furniture is.',
        'When Anthony Rocca backs into a pack, he beeps.',
        'The Dockers\' defence is in disarray. Everybody wants to be Gladys Knight, nobody wants to be the Pips.',
        'Shaun Rehn has been terrific again today but look at him, he\'s paid a price. Like a Saint Bernard in a heatwave.',
        'Not bad for a guy who\'s built like a pirate\'s lunch table.',
        'The Saints have had more five-year plans than Fidel Castro.',
        'I swear if Ronnie Burns were building a house he\'d start with the roof.',
        'Some people might say that was a set play, but if it was, the Swans must have copied it off a Portuguese bus timetable.',
        'If Simon Black was any more inside he\'d be a pancreas.',
        'In for the Cats today, David and Steve Johnson. Who better to patch up a line-up than Johnson & Johnson.',
        'There is something magnetic about his aura. Paul Roos should be covered in fridge magnets.',
        'I remember when he debuted he had the haircut of a 400-game veteran.',
        'He might be the only guy in the competition whose feet appear in his driver licence photo.',
        'Matthew Clarke is a dinosaur thriving on climate change.',
        'Mitch Hahn found himself girt by Shaws.',
        'They\'ve finally got Jude Bolton off the ground and he\'s heaving like a crazed tuba player.',
        'Bassett\'s my man. He never takes a breather. If he was a postman I reckon he\'d finish his round in 20 minutes, stopping only to bite a few dogs.',
        'Plenty of cloud about. And for anyone who\'s ever called a plumber that\'s a rare sight – the moon is completely covered.'
    ];

    public static function quote(): string
    {
        return self::$dennis[array_rand(self::$dennis)];
    }
}
