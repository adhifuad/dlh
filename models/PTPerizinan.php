<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "p_t_perizinan".
 *
 * @property integer $id
 * @property integer $jenis_perizinan
 * @property string $dibuat_tgl
 * @property string $nomor_pengajuan
 * @property string $masa_berlaku
 * @property integer $jenis_pengajuan
 * @property integer $jenis_pemohon
 * @property integer $nomor_ktp
 * @property string $nama_lengkap
 * @property string $tempat_lahir
 * @property string $tgl_lahir
 * @property string $alamat
 * @property string $provinsi
 * @property string $kota_kabupaten
 * @property string $kecamatan
 * @property string $kelurahan_desa
 * @property string $no_telp
 * @property string $no_hp
 * @property string $email
 * @property string $pekerjaan
 * @property string $nama_kuasa
 * @property string $no_identitas_kuasa
 * @property string $no_telp_kuasa
 * @property string $npwp
 * @property string $nama_perusahaan
 * @property string $provinsi_perusahaan
 * @property string $kota_kabupaten_perusahaan
 * @property string $kecamatan_perusahaan
 * @property string $kelurahan_desa_perusahaan
 * @property string $kodepos_perusahaan
 * @property string $jenis_usaha
 * @property string $no_telp_perusahaan
 * @property string $lokasi_usaha
 * @property string $email_perusahaan
 * @property string $akta_pendirian_nama_notaris
 * @property string $akta_pendirian_alamat_notaris
 * @property string $akta_pendirian_telp_notaris
 * @property string $akta_pendirian_nomor
 * @property string $akta_pendirian_tgl
 * @property string $akta_pendirian_nomor_pengesahan
 * @property string $akta_pendirian_tgl_pengesahan
 * @property string $akta_perubanan_nama_notaris
 * @property string $akta_perubahan_alamat_notaris
 * @property string $akta_perubahan_telp_notaris
 * @property string $akta_perubahan_nomor
 * @property string $akta_perubahan_tgl
 * @property string $akta_perubahan_nomor_pengesahan
 * @property string $akta_perubahan_tgl_pengesahan
 * @property string $file_foto
 * @property integer $file_foto_size
 * @property string $file_foto_type
 * @property string $file_ktp_paspor
 * @property integer $file_ktp_paspor_size
 * @property string $file_ktp_paspor_type
 * @property string $file_npwp_pribadi
 * @property integer $file_npwp_pribadi_size
 * @property string $file_npwp_pribadi_type
 * @property string $file_npwp_perusahaan
 * @property integer $file_npwp_perusahaan_size
 * @property string $file_npwp_perusahaan_type
 * @property string $file_pendukung_lain
 * @property integer $file_pendukung_lain_size
 * @property string $file_pendukung_lain_type
 * @property integer $modal_usaha
 * @property string $deskripsi_kegiatan
 * @property string $jam_operasional_start
 * @property string $jam_operasional_end
 * @property string $luas_tanah
 * @property string $luas_tanah_untuk_usaha
 * @property string $status_tanah
 * @property integer $pembersihan_lokasi_usaha
 * @property string $pembersihan_lokasi_usaha_perhari_perminggu
 * @property string $limbah_yg_dihasilkan
 * @property string $penanganan_limbah_yg_dihasilkan
 * @property string $volume_usaha
 * @property string $batas_lahan_utara
 * @property string $batas_lahan_barat
 * @property string $batas_lahan_timur
 * @property string $batas_lahan_selatan
 * @property string $batas_desa_utara
 * @property string $batas_desa_barat
 * @property string $batas_desa_timur
 * @property string $batas_desa_selatan
 * @property integer $tenaga_kerja
 * @property string $penggunaan_listrik_perbulan
 * @property string $sumber_listrik
 * @property string $penggunaan_air_perbulan
 * @property string $sumber_air
 * @property string $penggunaan_lahan_operasional
 * @property string $penggunaan_lahan_gudang
 * @property string $penggunaan_lahan_kantor
 * @property string $penggunaan_lahan_rth
 *
 * @property PMJenisPemohon $jenisPemohon
 * @property PMJenisPengajuan $jenisPengajuan
 * @property PMJenisPerizinan $jenisPerizinan
 * @property PTPerizinanItems[] $pTPerizinanItems
 */
class PTPerizinan extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'p_t_perizinan';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['jenis_perizinan', 'dibuat_tgl', 'nomor_pengajuan', 'masa_berlaku', 'jenis_pengajuan', 'jenis_pemohon', 'nomor_ktp', 'nama_lengkap', 'alamat', 'no_telp', 'no_hp', 'npwp', 'nama_perusahaan', 'jenis_usaha'], 'required'],
            [['jenis_perizinan', 'jenis_pengajuan', 'jenis_pemohon', 'nomor_ktp', 'file_foto_size', 'file_ktp_paspor_size', 'file_npwp_pribadi_size', 'file_npwp_perusahaan_size', 'file_pendukung_lain_size', 'modal_usaha', 'pembersihan_lokasi_usaha', 'tenaga_kerja'], 'integer'],
            [['dibuat_tgl', 'masa_berlaku', 'tgl_lahir', 'akta_pendirian_tgl', 'akta_pendirian_tgl_pengesahan', 'akta_perubahan_tgl', 'akta_perubahan_tgl_pengesahan', 'jam_operasional_start', 'jam_operasional_end'], 'safe'],
            [['file_foto', 'file_ktp_paspor', 'file_npwp_pribadi', 'file_npwp_perusahaan', 'file_pendukung_lain', 'deskripsi_kegiatan', 'penanganan_limbah_yg_dihasilkan'], 'string'],
            [['nomor_pengajuan', 'email', 'pekerjaan', 'jenis_usaha', 'email_perusahaan', 'akta_pendirian_nomor', 'akta_pendirian_nomor_pengesahan', 'akta_perubahan_nomor', 'akta_perubahan_nomor_pengesahan', 'batas_lahan_utara', 'batas_lahan_barat', 'batas_lahan_timur', 'batas_lahan_selatan', 'batas_desa_utara', 'batas_desa_barat', 'batas_desa_timur', 'batas_desa_selatan'], 'string', 'max' => 25],
            [['nama_lengkap', 'nama_kuasa', 'nama_perusahaan', 'akta_pendirian_nama_notaris', 'akta_perubanan_nama_notaris'], 'string', 'max' => 50],
            [['tempat_lahir', 'provinsi', 'kota_kabupaten', 'kecamatan', 'kelurahan_desa', 'npwp', 'provinsi_perusahaan', 'kota_kabupaten_perusahaan', 'kecamatan_perusahaan', 'kelurahan_desa_perusahaan', 'file_foto_type', 'file_ktp_paspor_type', 'file_npwp_pribadi_type', 'file_npwp_perusahaan_type', 'file_pendukung_lain_type', 'luas_tanah', 'luas_tanah_untuk_usaha', 'status_tanah', 'pembersihan_lokasi_usaha_perhari_perminggu', 'volume_usaha', 'penggunaan_listrik_perbulan', 'sumber_listrik', 'penggunaan_air_perbulan', 'sumber_air', 'penggunaan_lahan_operasional', 'penggunaan_lahan_gudang', 'penggunaan_lahan_kantor', 'penggunaan_lahan_rth'], 'string', 'max' => 20],
            [['alamat', 'lokasi_usaha', 'akta_pendirian_alamat_notaris', 'akta_perubahan_alamat_notaris', 'limbah_yg_dihasilkan'], 'string', 'max' => 100],
            [['no_telp', 'no_hp', 'no_telp_kuasa', 'no_telp_perusahaan', 'akta_pendirian_telp_notaris', 'akta_perubahan_telp_notaris'], 'string', 'max' => 15],
            [['no_identitas_kuasa'], 'string', 'max' => 16],
            [['kodepos_perusahaan'], 'string', 'max' => 10],
            [['jenis_pemohon'], 'exist', 'skipOnError' => true, 'targetClass' => PMJenisPemohon::className(), 'targetAttribute' => ['jenis_pemohon' => 'id']],
            [['jenis_pengajuan'], 'exist', 'skipOnError' => true, 'targetClass' => PMJenisPengajuan::className(), 'targetAttribute' => ['jenis_pengajuan' => 'id']],
            [['jenis_perizinan'], 'exist', 'skipOnError' => true, 'targetClass' => PMJenisPerizinan::className(), 'targetAttribute' => ['jenis_perizinan' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'jenis_perizinan' => 'Jenis Perizinan',
            'dibuat_tgl' => 'Dibuat Tgl',
            'nomor_pengajuan' => 'Nomor Pengajuan',
            'masa_berlaku' => 'Masa Berlaku',
            'jenis_pengajuan' => 'Jenis Pengajuan',
            'jenis_pemohon' => 'Jenis Pemohon',
            'nomor_ktp' => 'Nomor Ktp',
            'nama_lengkap' => 'Nama Lengkap',
            'tempat_lahir' => 'Tempat Lahir',
            'tgl_lahir' => 'Tgl Lahir',
            'alamat' => 'Alamat',
            'provinsi' => 'Provinsi',
            'kota_kabupaten' => 'Kota Kabupaten',
            'kecamatan' => 'Kecamatan',
            'kelurahan_desa' => 'Kelurahan Desa',
            'no_telp' => 'No Telp',
            'no_hp' => 'No Hp',
            'email' => 'Email',
            'pekerjaan' => 'Pekerjaan',
            'nama_kuasa' => 'Nama Kuasa',
            'no_identitas_kuasa' => 'No Identitas Kuasa',
            'no_telp_kuasa' => 'No Telp Kuasa',
            'npwp' => 'Npwp',
            'nama_perusahaan' => 'Nama Perusahaan',
            'provinsi_perusahaan' => 'Provinsi Perusahaan',
            'kota_kabupaten_perusahaan' => 'Kota Kabupaten Perusahaan',
            'kecamatan_perusahaan' => 'Kecamatan Perusahaan',
            'kelurahan_desa_perusahaan' => 'Kelurahan Desa Perusahaan',
            'kodepos_perusahaan' => 'Kodepos Perusahaan',
            'jenis_usaha' => 'Jenis Usaha',
            'no_telp_perusahaan' => 'No Telp Perusahaan',
            'lokasi_usaha' => 'Lokasi Usaha',
            'email_perusahaan' => 'Email Perusahaan',
            'akta_pendirian_nama_notaris' => 'Akta Pendirian Nama Notaris',
            'akta_pendirian_alamat_notaris' => 'Akta Pendirian Alamat Notaris',
            'akta_pendirian_telp_notaris' => 'Akta Pendirian Telp Notaris',
            'akta_pendirian_nomor' => 'Akta Pendirian Nomor',
            'akta_pendirian_tgl' => 'Akta Pendirian Tgl',
            'akta_pendirian_nomor_pengesahan' => 'Akta Pendirian Nomor Pengesahan',
            'akta_pendirian_tgl_pengesahan' => 'Akta Pendirian Tgl Pengesahan',
            'akta_perubanan_nama_notaris' => 'Akta Perubanan Nama Notaris',
            'akta_perubahan_alamat_notaris' => 'Akta Perubahan Alamat Notaris',
            'akta_perubahan_telp_notaris' => 'Akta Perubahan Telp Notaris',
            'akta_perubahan_nomor' => 'Akta Perubahan Nomor',
            'akta_perubahan_tgl' => 'Akta Perubahan Tgl',
            'akta_perubahan_nomor_pengesahan' => 'Akta Perubahan Nomor Pengesahan',
            'akta_perubahan_tgl_pengesahan' => 'Akta Perubahan Tgl Pengesahan',
            'file_foto' => 'File Foto',
            'file_foto_size' => 'File Foto Size',
            'file_foto_type' => 'File Foto Type',
            'file_ktp_paspor' => 'File Ktp Paspor',
            'file_ktp_paspor_size' => 'File Ktp Paspor Size',
            'file_ktp_paspor_type' => 'File Ktp Paspor Type',
            'file_npwp_pribadi' => 'File Npwp Pribadi',
            'file_npwp_pribadi_size' => 'File Npwp Pribadi Size',
            'file_npwp_pribadi_type' => 'File Npwp Pribadi Type',
            'file_npwp_perusahaan' => 'File Npwp Perusahaan',
            'file_npwp_perusahaan_size' => 'File Npwp Perusahaan Size',
            'file_npwp_perusahaan_type' => 'File Npwp Perusahaan Type',
            'file_pendukung_lain' => 'File Pendukung Lain',
            'file_pendukung_lain_size' => 'File Pendukung Lain Size',
            'file_pendukung_lain_type' => 'File Pendukung Lain Type',
            'modal_usaha' => 'Modal Usaha',
            'deskripsi_kegiatan' => 'Deskripsi Kegiatan',
            'jam_operasional_start' => 'Jam Operasional Start',
            'jam_operasional_end' => 'Jam Operasional End',
            'luas_tanah' => 'Luas Tanah',
            'luas_tanah_untuk_usaha' => 'Luas Tanah Untuk Usaha',
            'status_tanah' => 'Status Tanah',
            'pembersihan_lokasi_usaha' => 'Pembersihan Lokasi Usaha',
            'pembersihan_lokasi_usaha_perhari_perminggu' => 'Pembersihan Lokasi Usaha Perhari Perminggu',
            'limbah_yg_dihasilkan' => 'Limbah Yg Dihasilkan',
            'penanganan_limbah_yg_dihasilkan' => 'Penanganan Limbah Yg Dihasilkan',
            'volume_usaha' => 'Volume Usaha',
            'batas_lahan_utara' => 'Batas Lahan Utara',
            'batas_lahan_barat' => 'Batas Lahan Barat',
            'batas_lahan_timur' => 'Batas Lahan Timur',
            'batas_lahan_selatan' => 'Batas Lahan Selatan',
            'batas_desa_utara' => 'Batas Desa Utara',
            'batas_desa_barat' => 'Batas Desa Barat',
            'batas_desa_timur' => 'Batas Desa Timur',
            'batas_desa_selatan' => 'Batas Desa Selatan',
            'tenaga_kerja' => 'Tenaga Kerja',
            'penggunaan_listrik_perbulan' => 'Penggunaan Listrik Perbulan',
            'sumber_listrik' => 'Sumber Listrik',
            'penggunaan_air_perbulan' => 'Penggunaan Air Perbulan',
            'sumber_air' => 'Sumber Air',
            'penggunaan_lahan_operasional' => 'Penggunaan Lahan Operasional',
            'penggunaan_lahan_gudang' => 'Penggunaan Lahan Gudang',
            'penggunaan_lahan_kantor' => 'Penggunaan Lahan Kantor',
            'penggunaan_lahan_rth' => 'Penggunaan Lahan Rth',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getJenisPemohon()
    {
        return $this->hasOne(PMJenisPemohon::className(), ['id' => 'jenis_pemohon']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getJenisPengajuan()
    {
        return $this->hasOne(PMJenisPengajuan::className(), ['id' => 'jenis_pengajuan']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getJenisPerizinan()
    {
        return $this->hasOne(PMJenisPerizinan::className(), ['id' => 'jenis_perizinan']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPTPerizinanItems()
    {
        return $this->hasMany(PTPerizinanItems::className(), ['perizinan' => 'id']);
    }
}
