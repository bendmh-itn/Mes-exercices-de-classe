using System;

namespace categoriserAge
{
    class Program
    {
        static void Main(string[] args)
        {
            int age = 0;
            string categorie = "";
            Console.Write("Quel est votre age ? ");
            age = Int32.Parse(Console.ReadLine());
            //RenvoieCategorie monProgram = new RenvoieCategorie();
            //categorie = monProgram.WichCategories(age);
            categorie = WichCategories(age);
            Console.WriteLine("Tu es dans la catégorie : " + categorie);
        }

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
