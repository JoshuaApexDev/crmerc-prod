<?php

namespace App\Console\Commands;

use App\Models\CrmCustomer;
use App\Models\CrmStatus;
use Illuminate\Console\Command;
use League\Csv\Reader;

class leads_uploader extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'upload_leads:leads_uploader {file} {user_id}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command to upload leads from a CSV with specific headers';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $csv_path = $this->argument('file');
        $user = $this->argument('user_id');
        $csv_file = Reader::createFromPath($csv_path);
        $csv_file->setHeaderOffset(0);
        $csv_data = $csv_file->getRecords();
        $csv_file->includeEmptyRecords();
        $csv_file->isEmptyRecordsIncluded();

        $crmCustomer_model = new CrmCustomer();
        $bar = $this->output->createProgressBar(count($csv_file));
        $bar->start();
        $status = CrmStatus::where('name', 'New Lead')->first();
        foreach($csv_data as $row){
            if(!CrmCustomer::where('phone', '=', $row['PrimaryPhone'])->exists()){
                $crmCustomer_model->create([
                    'first_name' => $row['FirstName'],
                    'last_name' => $row['LastName'],
                    'email' => $row['Email'],
                    'phone' => $row['PrimaryPhone'],
                    'address' => $row['Address'],
                    'city' => $row['City'],
                    'state' => $row['State'],
                    'zip' => $row['ZipCode'],
                    'company_name' => $row['BorrowerName'],
                    'erc_amount' => $row['CurrentApprovalAmount'],
                    'w2_employees' => $row['W2_employees'],
                    'receive_erc' => $row['Receive_ERC'],
                    'ppp_loan' => $row['ppp_loan'],
                    'employee_count' => $row['Employee_count'],
                    'first_name_verified' => $row['fname_verify'],
                    'last_name_verified' => $row['Lname_verify'],
                    'status_id' => $status->id,
                ]);
            }else{
                $this->info('Row: '.$bar->getProgress().' - Phone: '.$row['PrimaryPhone'].' already exists');
            }
            $bar->advance();
        }
        $bar->finish();
        $this->info('Records uploaded successfully');
//        dd($this->argument('file'), $this->argument('user_id'));
    }
}
