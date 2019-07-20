var myBiodata = () => {
  var obj = {};
  obj.name = "Budi Prih Hastomo";
  obj.age = 18;
  obj.address =
    "Ngepos, RT02/RW04, Gayamdompo, Kec. Karanganyar, Kab. Karanganyar, Jawa Tengah.";
  obj.hobbies = [
    "Coding",
    "Swimming",
    "Listen music",
    "Read books about programming"
  ];
  obj.is_married = false;
  obj.list_school = [
    {
      name: "SD Negeri 03 Bejen",
      year_in: 2007,
      year_out: 2013,
      major: null
    },
    {
      name: "SMP Negeri 1 Karanganyar",
      year_in: 2013,
      year_out: 2016,
      major: null
    },
    {
      name: "SMK Negeri 2 Karanganyar",
      year_in: 2016,
      year_out: 2019,
      major: "Rekayasa Perangkat Lunak"
    }
  ];
  obj.skills = [
    {
      skill_name: "HTML",
      level: "advanced"
    },
    {
      skill_name: "CSS",
      level: "advanced"
    },
    {
      skill_name: "PHP",
      level: "advanced"
    },
    {
      skill_name: "CODEIGNITER",
      level: "advanced"
    },
    {
      skill_name: "LARAVEL",
      level: "beginner"
    },
    {
      skill_name: "AJAX",
      level: "advanced"
    },
    {
      skill_name: "JAVASCRIPT",
      level: "advanced"
    },
    {
      skill_name: "VISUAL BASIC",
      level: "advanced"
    },
    {
      skill_name: "C++",
      level: "beginner"
    },
    {
      skill_name: "C#",
      level: "advanced"
    }
  ];
  obj.interest_in_coding = true;

  return console.log(JSON.stringify(obj));
};

// Panggil Function myBiodata() => Return Berupa JSON
myBiodata();
