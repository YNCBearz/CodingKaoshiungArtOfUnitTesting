namespace CKUT.Core.Services.Ch8._8._2._2
{
    public class LogAnalyzer
    {
        public bool IsValid(string fileName)
        {
            if (fileName.Length < 8)
            {
                return true;
            }

            return false;
        }
    }
}