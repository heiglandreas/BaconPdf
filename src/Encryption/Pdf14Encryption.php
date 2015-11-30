<?php
/**
 * BaconPdf
 *
 * @link      http://github.com/Bacon/BaconPdf For the canonical source repository
 * @copyright 2015 Ben Scholzen (DASPRiD)
 * @license   http://opensource.org/licenses/BSD-2-Clause Simplified BSD License
 */

namespace Bacon\Pdf\Encryption;

class Pdf14Encryption extends Pdf11Encryption
{
    /**
     * {@inheritdoc}
     */
    protected function writeAdditionalEncryptDictionaryEntries(PdfWriter $pdfWriter)
    {
        $pdfWriter->writeName('Length');
        $pdfWriter->writeNumber(128);
    }

    /**
     * {@inheritdoc}
     */
    protected function getRevision()
    {
        return 3;
    }

    /**
     * {@inheritdoc}
     */
    protected function getAlgorithm()
    {
        return 2;
    }

    /**
     * {@inheritdoc}
     */
    protected function getKeyLength()
    {
        return 128;
    }
}
