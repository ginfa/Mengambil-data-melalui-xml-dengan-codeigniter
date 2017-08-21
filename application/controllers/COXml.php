<?php
if (! defined('BASEPATH')) exit('No direct script access allowed');

class COXml extends CI_Controller
{
    function index ()
    {
      // untuk load library
      $this->load->library('xml_writer');

      // untuk load model
      $data = $this->ModelUser->getdatauser();
      $data2 = $this->ModelUser->getdatapenghasilan();
      $data3 = $this->ModelUser->getdataahliwaris();
      $data4 = $this->ModelUser->getdatapembiayaan();
      // untuk set data xml writernya
      $xml = new xml_writer();
      $xml->setRootName('bmtmuhajirin');
      $xml->Initiate();

      // untuk start branch (gausah diapa2in)
      $xml->startBranch('datauser');

      // lakukan looping untuk mengambil semua data di database
      foreach ($data as $row) {
        //set nama children untuk branch datauser diatas
        $xml->startBranch('datauser', array('id' => $row->id_datauser));
        $xml->addNode('id_nasabah', $row->id_nasabah);
        $xml->addNode('nama', $row->nama);
        $xml->addNode('tempat_tanggal_lahir', $row->tempat_tanggal_lahir);
        $xml->addNode('pekerjaan', $row->pekerjaan);
        $xml->addNode('nomor_identitas', $row->nomor_identitas);
        $xml->addNode('status', $row->status);
        $xml->addNode('pendidikan_terakhir',$row->pendidikan_terakhir);
        $xml->addNode('jumlah_tanggungan', $row->jumlah_tanggungan);
        $xml->addNode('lama_usaha', $row->lama_usaha);
        $xml->addNode('status_usaha', $row->status_usaha);
        $xml->addNode('status_rumah',$row->status_rumah);
        $xml->addNode('alamat', $row->alamat);
        $xml->addNode('no_tlp',$row->no_tlp);
        $xml->addNode('alamat_kantor', $row->alamat_kantor);
        $xml->addNode('no_tlp_kantor',$row->no_tlp_kantor);
        $xml->addNode('status_user',$row->status_user);
        $xml->endBranch();
      }
      $xml->endBranch();
      $xml->startBranch('datapenghasilan');

      // lakukan looping untuk mengambil semua data di database
      foreach ($data2 as $row) {
        //set nama children untuk branch datapenghasilan diatas
        $xml->startBranch('datapenghasilan', array('id' => $row->id_penghasilan));
        $xml->addNode('no_rekening', $row->no_rekening);
        $xml->addNode('penghasilan_suami', $row->penghasilan_suami);
        $xml->addNode('penghasilan_istri', $row->penghasilan_istri);
        $xml->addNode('penghasilan_lainnya', $row->penghasilan_lainnya);
        $xml->addNode('biaya_rmh_tangga', $row->biaya_rmh_tangga);
        $xml->addNode('biaya_kebutuhan_anak', $row->biaya_kebutuhan_anak);
        $xml->addNode('pengeluaran_pribadi',$row->pengeluaran_pribadi);
        $xml->addNode('pembayaran_hutang', $row->pembayaran_hutang);
        $xml->addNode('pengeluaran_lainnya',$row->pengeluaran_lainnya);
        $xml->addNode('status_datapenghasilan',$row->status_datapenghasilan);
        $xml->endBranch();
      }
      $xml->endBranch();
      $xml->startBranch('ahliwaris');

      // lakukan looping untuk mengambil semua data di database
      foreach ($data3 as $row) {
        //set nama children untuk branch ahliwaris diatas
        $xml->startBranch('ahliwaris', array('id' => $row->id_ahliwaris));
        $xml->addNode('no_rekening', $row->no_rekening);
        $xml->addNode('nama', $row->nama);
        $xml->addNode('alamat', $row->alamat);
        $xml->addNode('hubungan', $row->hubungan);
        $xml->addNode('pekerjaan', $row->pekerjaan);
        $xml->addNode('status_ahliwaris', $row->status_ahliwaris);
        $xml->endBranch();
      }
      $xml->endBranch();

      $xml->startBranch('pembiayaan');

      // lakukan looping untuk mengambil semua data di database
      foreach ($data4 as $row) {
        //set nama children untuk branch pembiayaan diatas
        $xml->startBranch('pembiayaan', array('id' => $row->id_pembiayaan));
        $xml->addNode('id_pegawai', $row->id_pegawai);
        $xml->addNode('no_rekening', $row->no_rekening);
        $xml->addNode('jumlah_permohonan_pembiayaan', $row->jumlah_permohonan_pembiayaan);
        $xml->addNode('digunakan_untuk', $row->digunakan_untuk);
        $xml->addNode('jangka_waktu', $row->jangka_waktu);
        $xml->addNode('sumber_pelunasan', $row->sumber_pelunasan);
        $xml->addNode('rencana_pembayaran_per', $row->rencana_pembayaran_per);
        $xml->addNode('angsuran_pokok', $row->angsuran_pokok);
        $xml->addNode('margin', $row->margin);
        $xml->addNode('jaminan', $row->jaminan);
        $xml->endBranch();
      }
      $xml->endBranch();

      $oke = array();
      $oke['xml'] = $xml->getXml(FALSE);
      //echo $oke;
      $this->load->view('xml', $oke);
    }

    public function indexx()
        {
            $bmtmuhajirin = simplexml_load_file('http://localhost:5000/xml_project/COXml/');
            $data['bmt'] = $bmtmuhajirin->datauser;
            $this->load->view('home', $data);
        }

    public function ahliwaris()
        {
            $bmtmuhajirin_aw = simplexml_load_file('http://localhost:5000/xml_project/COXml/');
            $data['bmt'] = $bmtmuhajirin_aw->ahliwaris;
            $this->load->view('ahliwaris', $data);
        }

    public function penghasilan()
        {
           $bmtmuhajirin_pl = simplexml_load_file('http://localhost:5000/xml_project/COXml/');
           $data['bmt'] = $bmtmuhajirin_pl->datapenghasilan;
           $this->load->view('penghasilan', $data);
        }

    public function pembiayaan()
        {
           $bmtmuhajirin_ph = simplexml_load_file('http://localhost:5000/xml_project/COXml/');
           $data['bmt'] = $bmtmuhajirin_ph->pembiayaan;
           $this->load->view('pembiayaan', $data);
        }
}
