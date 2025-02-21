<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Mail\SendMail;
use Mail;

class SendMailJob extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:send-mail-job';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Sending Mail to the User!';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $data = "Hello World";
        Mail::to('aimlesstuhin@gmail.com')->send(new SendMail($data));
        $this->info("Mail Successfully sent!");
    }
}
