using System;

namespace CKUT.Core.Services.Ch3.No5
{
    public class FakeManager : IFileExtensionManager
    {
        public bool IsValid(string fileName)
        {
            if (fileName.EndsWith(".txt"))
            {
                return true;
            }
            else
            {
                throw new Exception("It's not supported");
            }
        }
    }
}