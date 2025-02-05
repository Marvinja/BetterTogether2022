<?php
    $title = "Ambassadors";
    include('include/header.php');
 ?>
 <p>As part of the promotional campaign for Better Together 2022, the Organising Committee is pleased to invite experienced and enthusiastic industry and academy representatives to become Better Together 2022 Ambassadors. The role of the Ambassador will be to promote the Conference in their home countries and regions and throughout their respective organisations, in order to assist the Committee with the overall marketing campaign for the Conference. The success of the conference in supporting our aims for global impact in childhood disability is dependent on reaching a very wide audience. We will invite a limited number of Ambassadors per country, so the participation of each Ambassador will be crucial to our marketing campaign in that region.</p>

 <p>If you are interested in becoming a Conference Ambassador please contact - <a href="mailto:info@bettertogether2022.org">info@bettertogether2022.org</a></p>

 <h2>Thank you to our Ambassadors</h2>

 <div class="row" id="ambassadors"></div>

 <h2>Ambassador Resources</h2>
 <p>To assist Ambassadors in their efforts to promote the Conference, the Organising Committee has provided the following promotional materials.</p>
 <ul>
   <li class="mb-2"><a href="downloads/A4-Promotional-Poster.pdf" target="_blank">A4 Promotional Poster</a></li>
   <li class="mb-2"><a href="downloads/Email-Signature.gif" target="_blank">Email Signature</a></li>
   <li class="mb-2"><a href="downloads/PowerPoint-Template-and-Titles-Slide.zip" target="_blank">PowerPoint Template and Title Slide</a></li>
   <li class="mb-2"><a href="downloads/Zoom-Backgrounds.zip" target="_blank">Zoom Backgrounds</a></li>
 </ul>


<script type="text/javascript">
  let ambassadors =
  [
    {
      "first": "Bob",
      "last": "Armstrong",
      "affiliation": "AACPDM",
      "country": "Canada/Nairobi"
    },
    {
      "first": "Jasmeet",
      "last": "Arora",
      "affiliation": "Indian ACP",
      "country": "India"
    },
    {
      "first": "Sylvain",
      "last": "Brochard",
      "affiliation": "EACD",
      "country": "France"
    },
    {
      "first": "Giovanni C",
      "last": "Cioni",
      "affiliation": "EACD",
      "country": "Italy"
    },
    {
      "first": "Diane",
      "last": "Damiano",
      "affiliation": "AACPDM",
      "country": "US"
    },
    {
      "first": "Sakti",
      "last": "Das",
      "affiliation": "IACP",
      "country": "India"
    },
    {
      "first": "Nathalie",
      "last": "de Vries",
      "affiliation": "",
      "country": "New Zealand"
    },
    {
      "first": "Simon",
      "last": "Garbellini",
      "affiliation": "AusACPDM",
      "country": "Australia"
    },
    {
      "first": "Uri",
      "last": "Givon",
      "affiliation": "AACPDM",
      "country": "Israel"
    },
    {
      "first": "Fiona",
      "last": "Graham",
      "affiliation": "AusACPDM",
      "country": "New Zealand"
    },
    {
      "first": "Israt",
      "last": "Jahan",
      "affiliation": "",
      "country": "Bangladesh"
    },
    {
      "first": "Sevastine",
      "last": "Katasakis",
      "affiliation": "",
      "country": "Australia"
    },
    {
      "first": "Naila Zaman",
      "last": "Khan",
      "affiliation": "",
      "country": "Bangladesh"
    },
    {
      "first": "Gulam",
      "last": "Khandaker",
      "affiliation": "AACPDM/EACD",
      "country": "Queensland/Bangladesh"
    },
    {
      "first": "Xiaojie",
      "last": "Li",
      "affiliation": "CARMCRC",
      "country": "China"
    },
    {
      "first": "Egmar",
      "last": "Longo",
      "affiliation": "ALDID",
      "country": "Latin/South America"
    },
    {
      "first": "Anna",
      "last": "Mackey",
      "affiliation": "AusACPDM",
      "country": "New Zealand"
    },
    {
      "first": "K.D.",
      "last": "Mallikarjuna",
      "affiliation": "Indian ACP",
      "country": "India"
    },
    {
      "first": "Therese",
      "last": "Millar",
      "affiliation": "EACD",
      "country": "England"
    },
    {
      "first": "Kate",
      "last": "Milner",
      "affiliation": "",
      "country": "Australia"
    },
    {
      "first": "Chris",
      "last": "Morris",
      "affiliation": "BACD",
      "country": "England"
    },
    {
      "first": "Gillian",
      "last": "Saloojee",
      "affiliation": "Southern African Academy of Childhood Disability",
      "country": "Southern Africa"
    },
    {
      "first": "Pauline",
      "last": "Samia",
      "affiliation": "Eastern Africa CD",
      "country": "Eastern Africa"
    },
    {
      "first": "Arnab",
      "last": "Seal",
      "affiliation": "EACD",
      "country": "England"
    },
    {
      "first": "Nadine",
      "last": "Smith",
      "affiliation": "AusACPDM",
      "country": "Australia"
    },
    {
      "first": "Pam",
      "last": "Thomason",
      "affiliation": "AusACPDM",
      "country": "Australia"
    },
    {
      "first": "Meredith",
      "last": "Wynter",
      "affiliation": "AusACPDM",
      "country": "Australia"
    }
  ];
  document.getElementById('ambassadors').innerHTML = ambassadors.map(a =>
    `
    <div class="col-md-4">
      <h4>${a.first} ${a.last}</h4>
      <p>${a.affiliation}
        ${a.affiliation == "" ? "" : `<br>` } <b>${a.country}</b></p>
    </div>
    `).join(``);
</script>



<?php
    include('include/footer.php');
 ?>
