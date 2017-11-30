<?php
use Migrations\AbstractSeed;
use Cake\Auth\DefaultPasswordHasher;
/**
 * Administrador seed.
 */
class AdministradorSeed extends AbstractSeed
{
    /**
     * Run Method.
     *
     * Write your database seeder using this method.
     *
     * More information on writing seeds is available here:
     * http://docs.phinx.org/en/latest/seeding.html
     *
     * @return void
     */
    public function run()
    {
        $hasher = new DefaultPasswordHasher();
        $password = $hasher->hash('ismael');

        $data = [
            'full_name'=>'Ismael Valdivia',
            'ci'=>'7933336',
            'email'=>'irva2008@gmail.com',
            'password'=>$password,
            'phone'=>'72217540',
            'photo'=>'1.jpg',
            'photo_dir'=>'ccebbcd6-f4f5-4037-a9c1-e5df20f013a2',
            'role'=>'admin',
            'created'=>date("Y-m-d H:i:s"),
            'modified'=>date("Y-m-d H:i:s")
        ];

        $table = $this->table('users');
        $table->insert($data)->save();
    }
}
