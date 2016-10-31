<?php

namespace App\Listeners;

use Aacotroneo\Saml2\Events\Saml2LoginEvent;

use App\Models\Users;

class Saml2LoginListener {

    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct() {
        //
    }

    /**
     * Handle the event.
     *
     * @param  PodcastWasPurchased  $event
     * @return void
     */
    public function handle(Saml2LoginEvent $event) {
        $user = $event->getSaml2User();

        $userData = $user->getAttributes();
        $laravelUser = Users::where("email", $userData['email'][0])->first();
        if ($laravelUser) {
            auth()->login($laravelUser);           
        } else {
            //create user
            $createdUser = new Users([
                'identityNumber' => isset($userData['nim'][0]) ? $userData['nim'][0] : $userData['nip'][0],
                'name' => $userData['nama'][0],
                'email' => $userData['email'][0],
                'keterangan' => json_encode([
                    'type' => isset($userData['nim'][0]) ? 'mahasiswa' : 'dosen',
                    'answered' => 0
                ])
            ]);
            $createdUser->save();

            auth()->login($createdUser);
        }
    }

}
