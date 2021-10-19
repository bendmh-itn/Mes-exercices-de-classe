using System;

namespace tableDe5
{
    class Program
    {
        static void Main(string[] args)
        {
            string resultat = "0";    
            Composition.ComposerTableDe5(ref resultat);
            Console.WriteLine(resultat);
        }
    }
}
