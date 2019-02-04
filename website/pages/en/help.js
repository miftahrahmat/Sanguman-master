/**
 * Copyright (c) 2017-present, Facebook, Inc.
 *
 * This source code is licensed under the MIT license found in the
 * LICENSE file in the root directory of this source tree.
 */

const React = require('react');

const CompLibrary = require('../../core/CompLibrary.js');

const Container = CompLibrary.Container;
const GridBlock = CompLibrary.GridBlock;

function Help(props) {
  const {config: siteConfig, language = ''} = props;
  const {baseUrl, docsUrl} = siteConfig;
  const docsPart = `${docsUrl ? `${docsUrl}/` : ''}`;
  const langPart = `${language ? `${language}/` : ''}`;
  const docUrl = doc => `${baseUrl}${docsPart}${langPart}${doc}`;

  const supportLinks = [
    {
      content: `Pelajari lebih lanjut menggunakan [dokumentasi di situs ini.](${docUrl(
        'doc1.html',
      )})`,
      title: 'Jelajahi Document',
    },
    {
      content: 'Ajukan pertanyaan tentang dokumentasi dan proyek',
      title: 'Bergabunglah Dengan Komunitas',
    },
    {
      content: "Cari tahu apa yang baru dengan sanguman",
      title: 'Tetap Terkini',
    },
  ];

  return (
    <div className="docMainWrapper wrapper">
      <Container className="mainContainer documentContainer postContainer">
        <div className="post">
          <header className="postHeader">
            <h1>Butuh Bantuan?</h1>
          </header>
          <p>Proyek ini dikelola oleh sekelompok orang yang berdedikasi.</p>
          <GridBlock contents={supportLinks} layout="threeColumn" />
        </div>
      </Container>
    </div>
  );
}

module.exports = Help;
