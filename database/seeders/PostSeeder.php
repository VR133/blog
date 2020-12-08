<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        $posts = [[
            'title' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit ',
            'text' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam non ante sit amet velit venenatis aliquam vitae a magna. Etiam pretium turpis in risus egestas ornare. Suspendisse accumsan purus sed tellus efficitur fermentum. Ut gravida risus non eros venenatis mattis. Aenean eleifend neque ut erat pulvinar, ut vulputate quam semper. Aliquam dictum massa leo, venenatis tincidunt neque vestibulum at. Mauris quis dapibus justo. Curabitur leo dolor, pulvinar non elementum in, blandit vitae felis.',

        ],
        [
            'title' => 'Suspendisse vel metus a lectus vestibulum hendrerit',
            'text' => 'Sed a tempor ex. Aenean elementum sed sem ut tristique. Proin laoreet metus nec aliquam molestie. Nulla risus turpis, consectetur eu massa sed, pellentesque eleifend nisi. Fusce pulvinar malesuada nisi. Suspendisse mattis finibus nulla ac mollis. Donec suscipit eros pretium auctor dignissim. Cras fringilla finibus commodo. Sed sagittis sem sit amet nibh congue tincidunt eu pharetra lorem. In feugiat ut massa ut faucibus. Aliquam auctor posuere eros in pulvinar.',

        ],
        [
            'title' => 'Vestibulum dolor imperdiet eros',
            'text' => 'Pellentesque auctor purus eu urna lobortis tincidunt. Fusce ut dictum sapien. Curabitur nec imperdiet eros. Maecenas lacinia feugiat turpis ut convallis. Nulla id scelerisque libero, eu dapibus velit. Nullam venenatis efficitur ultrices. Sed consectetur nulla neque, nec auctor dolor luctus condimentum. Suspendisse quis metus at sem vehicula sagittis ac eget massa. Mauris nulla lorem, feugiat in cursus ut, consequat quis ex. Proin laoreet tincidunt turpis, eu porta nisi congue in. Nulla maximus lectus sed dui efficitur facilisis. Curabitur accumsan, nunc in viverra ornare, est mi volutpat mi, in luctus tortor risus id mi. Maecenas pellentesque congue massa, ut commodo odio finibus sed. Sed elementum enim vitae velit fringilla, in venenatis eros feugiat. Pellentesque a euismod turpis. Morbi porttitor porttitor lacus, mattis posuere purus ornare sit amet.',

        ],
        [
            'title' => 'Fusce non diam vitae lorem eleifend posuere eleifend aliquet augue',
            'text' => 'Proin bibendum eleifend velit vitae varius. Donec pulvinar sed orci et sagittis. Mauris posuere, nunc vel fermentum volutpat, urna mauris efficitur arcu, interdum egestas risus enim sed dolor. Vestibulum mi lectus, suscipit vel maximus eget, vulputate a justo. Fusce accumsan neque ac massa finibus, eu aliquet urna vulputate. Cras suscipit, velit eu rhoncus ultricies, lacus odio semper orci, ac posuere velit massa in diam. Quisque et condimentum justo. Ut at finibus nisi. Morbi posuere ultricies ex nec efficitur. Vivamus id nibh vel tortor porta luctus. Ut eu suscipit enim. Sed posuere lectus sit amet libero dictum dignissim. Aliquam tellus nisl, hendrerit sed erat sit amet, porta vestibulum dui. Cras feugiat massa sollicitudin ante dignissim, non egestas magna volutpat. Integer tincidunt eros vel nunc pharetra, sit amet malesuada sem dictum.'
        ],
        [
            'title' => 'Vivamus vel erat ornare erat pulvinar euismod',
            'text' => 'Integer feugiat lectus justo, et pulvinar massa finibus vitae. Nullam semper at mi eget sodales. Maecenas eu velit sed mauris ultrices dapibus quis non metus. Ut in magna sed diam mollis facilisis sit amet nec odio. Mauris malesuada tincidunt laoreet. Pellentesque in magna leo. Integer ultrices suscipit ex sit amet elementum. Suspendisse potenti. Praesent vestibulum nec metus vel mollis. Cras rhoncus feugiat velit, et aliquet ligula tristique ut. Maecenas congue lacinia mauris nec tincidunt. Curabitur non faucibus arcu, nec tincidunt velit. Sed id consequat enim. Maecenas magna enim, condimentum vitae eros eu, suscipit convallis erat. Quisque ut odio euismod lectus elementum luctus sed eu orci.',
        ],
        [
            'title' => 'Quisque ac dui quis enim fringilla laoreet',
            'text' => 'Duis maximus cursus erat quis iaculis. Duis porttitor nisl ultrices hendrerit faucibus. Vestibulum sed massa enim. In ullamcorper mauris eget velit molestie, vel dignissim urna accumsan. Mauris leo nibh, porta eu turpis vitae, maximus eleifend mauris. Phasellus nisi eros, euismod sit amet facilisis congue, egestas sed justo. Aenean porttitor, lorem mattis vulputate tincidunt, diam lacus dictum metus, euismod posuere lorem risus quis est. Curabitur tristique elementum lorem, vitae imperdiet sem lobortis ut. Cras id dolor ut ligula sodales placerat. Integer sagittis rutrum lectus, sit amet luctus nibh vulputate imperdiet. Morbi vel metus sit amet augue porta gravida et sed ligula. Donec ac magna pretium, sagittis tellus quis, accumsan dui. Sed at justo arcu. Donec ut turpis condimentum, faucibus mauris vitae, placerat turpis. Aenean non facilisis ante. Quisque et ligula eu orci volutpat efficitur.',
        ]
        
        ];

        foreach($posts as $post){
            Post::create($post);
        }

    }
}
