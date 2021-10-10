using System;

namespace categoriserAge
{
    struct RenvoieCategorie
    {
        public static string WichCategories(int age)
        {
            if(age < 6 || age > 14){
                return "Aucune malheureusement :'(";
            }else if(age < 8){
                return "Poussin";
            }else if(age < 10){
                return "Pupille";
            }else if(age < 12){
                return "Minime";
            }else {
                return "Cadet";
            }

        }
    }
}
